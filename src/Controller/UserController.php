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

        $query = $entityManager->createQuery('
            SELECT u
            FROM App\Entity\User u
            WHERE u.roles LIKE :roleAdmin
            AND u.roles LIKE :roleUser
        ')
        ->setParameters([
            'roleAdmin' => '%ROLE_ADMIN%',
            'roleUser' => '%ROLE_USER%'
        ]);

$adminUsers = $query->getResult();

    // Collectez leurs adresses e-mail
    $adminEmails = [];
    foreach ($adminUsers as $adminUser) {
        $adminEmails[] = $adminUser->getEmail();
    }

    // Créez et envoyez l'e-mail
    $adminEmail = (new Email())
        ->from('admin@example.com')
        ->to(...$adminEmails) // Utilisez l'opérateur de décomposition pour passer le tableau d'adresses e-mail
        ->subject('Un utilisateur a supprimé son compte')
        ->html($this->renderView('emails/admin_notification.html.twig', [
            'email' => $user->getEmail(),
            'fileCount' => $fileCount
        ]));
    $mailer->send($adminEmail);

    return $this->redirectToRoute('app_logout');
}
}
