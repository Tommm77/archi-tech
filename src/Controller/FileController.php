<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\File;

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
                // Stockez uniquement les informations sans déplacer le fichier
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);

                // Créez et stockez l'entité File
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
                $this->entityManager->flush();

                $this->addFlash('success', 'File details saved successfully!');
                return $this->redirectToRoute('my_files');
            }
        }

        return $this->render('file/upload.html.twig');
    }


}
