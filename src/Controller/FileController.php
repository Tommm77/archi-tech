<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

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

}
