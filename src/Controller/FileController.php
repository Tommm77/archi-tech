<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\File;
use App\Entity\User;
use Knp\Snappy\Pdf;
use App\Repository\UserRepository;

class FileController extends AbstractController
{
    #[Route('/my-files', name: 'my_files')]
    public function index(UserInterface $user)
    {
        $files = $user->getFiles();
        $isAdmin = in_array('ROLE_ADMIN', $user->getRoles());

        return $this->render('file/index.html.twig', [
            'files' => $files,
            'isAdmin' => $isAdmin,
        ]);
    }

    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    #[Route('/upload', name: 'file_upload', methods: ['POST', 'GET'])]
    public function upload(Request $request): Response
    {
        $user = $this->getUser();
        $storage = $user->getStorage();
        $usestorage = $user->getUsestorage();
        if ($request->isMethod('POST')) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $request->files->get('file');
            if ($uploadedFile) {
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);

                $mimeType = $uploadedFile->getMimeType();

                $filesize = $uploadedFile->getSize();

                $filesizeInGB = round($filesize / (1024 ** 3), 2);

                if ($usestorage + $filesizeInGB > $storage) {
                    $this->addFlash('error', 'Vous avez dépassé votre limite de stockage. Achetez 20 Go supplémentaires pour continuer.');
                    return $this->redirectToRoute('my_files');
                }

                $destination = realpath($this->getParameter('kernel.project_dir').'/public/uploads/');
                    $uploadedFile->move($destination, $originalFilename);


                $file = new File();
                $file->setFilename($originalFilename);
                $file->setFiletype($mimeType);
                $file->setDescription($request->request->get('description'));
                $file->setFilesize($filesize);
                $file->setUploadDate(new \DateTime());
                $file->setCreateDate(new \DateTime());
                $file->setOwner($this->getUser());
                $file->setFilepath('uploads/' . $originalFilename);

                $this->entityManager->persist($file);

                $user = $this->getUser();
                $currentUseStorage = $user->getUsestorage();
                $user->setUsestorage($currentUseStorage + $filesizeInGB);

                $this->entityManager->persist($user);
                $this->entityManager->flush();

                $this->addFlash('success', 'File uploaded and details saved successfully!');
                return $this->redirectToRoute('my_files');
            } else {
                $this->addFlash('error', 'No file uploaded.');
            }
        }

        return $this->render('file/upload.html.twig');
    }



    #[Route('/file/{id}/delete', name: 'file_delete', methods: ['GET'])]
    public function delete(int $id): Response
    {
        $file = $this->entityManager->getRepository(File::class)->find($id);
        if (!$file) {
            throw $this->createNotFoundException('The file does not exist.');
        }

        // Vérifiez si l'utilisateur actuel est le propriétaire du fichier ou s'il est admin
        if ($file->getOwner() === $this->getUser() || $this->isGranted('ROLE_ADMIN')) {
            // Convertir la taille du fichier en Go
            $filesizeInGB = $file->getFilesize() / (1024 ** 3);

            $user = $this->getUser();
            $currentUseStorage = $user->getUsestorage();
            $user->setUsestorage($currentUseStorage - $filesizeInGB);

            $this->entityManager->persist($user);

            $this->entityManager->remove($file);
            $this->entityManager->flush();

            $this->addFlash('success', 'File deleted successfully!');
        } else {
            $this->addFlash('error', 'You do not have permission to delete this file.');
        }

        return $this->redirectToRoute('my_files');
    }

    #[Route("/generate-invoice/{userId}", name: "generate_invoice")]
    public function generateInvoice(int $userId, Pdf $snappy, UserRepository $userRepository)
{
    $user = $userRepository->find($userId);

    if (!$user) {
        throw $this->createNotFoundException('Utilisateur non trouvé.');
    }

    $html = $this->renderView('invoice.html.twig', [
        'user' => $user
    ]);

    $filename = 'facture_' . date('Y-m-d') . '.pdf';

    return new Response(
        $snappy->getOutputFromHtml($html),
        200,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]
    );
}

#[Route("/uploads/{filename}", name: "serve_file")]
public function serveFile(string $filename)
{
    $file = $this->getParameter('kernel.project_dir').'/public/uploads/'.$filename;

    if (!file_exists($file)) {
        throw $this->createNotFoundException('The file does not exist.'.$filename);
    }

    return new BinaryFileResponse($file);
}



}
