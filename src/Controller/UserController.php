<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class UserController extends AbstractController {

  #[Route(path: '/delete-account', name: 'delete_account')]
  public function deleteAccount(MailerInterface $mailer, EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage, SessionInterface $session): Response
{
    $user = $this->getUser();
    $files = $user->getFiles();

    $fileCount = count($files);

    foreach ($files as $file) {
        $entityManager->remove($file);
    }

    $tokenStorage->setToken(null);
    $session->invalidate();

    $entityManager->remove($user);
    $entityManager->flush();

    $email = (new Email())
        ->from('admin@example.com')
        ->to($user->getEmail())
        ->subject('Suppression de compte réussie')
        ->html($this->renderView('emails/user_deleted.html.twig',
            ['email' => $user->getEmail()]));
        $mailer->send($email);

    $adminEmail = (new Email())
        ->from('admin@example.com')
        ->to('admin@example.com')
        ->subject('Un utilisateur a supprimé son compte')
        ->html($this->renderView('emails/admin_notification.html.twig', [
            'email' => $user->getEmail(),
            'fileCount' => $fileCount
        ]));
    $mailer->send($adminEmail);

    return $this->redirectToRoute('app_logout');
}
}
