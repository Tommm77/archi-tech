<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\File;
use App\Entity\User;

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
        if ($request->isMethod('POST')) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $request->files->get('file');
            if ($uploadedFile) {
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);

                $file = new File();
                $file->setFilename($originalFilename);
                $file->setFilesize($uploadedFile->getSize());
                $file->setFiletype($uploadedFile->getMimeType());
                $file->setDescription($request->request->get('description'));
                $file->setUploadDate(new \DateTime());
                $file->setCreateDate(new \DateTime());
                $file->setOwner($this->getUser());
                $file->setFilepath("uploads/test/");

                $this->entityManager->persist($file);

                // Convertir la taille du fichier en Go
                $filesizeInGB = round($uploadedFile->getSize() / (1024 ** 3), 2);

                // Récupérer l'utilisateur actuel et mettre à jour usestorage
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




}
