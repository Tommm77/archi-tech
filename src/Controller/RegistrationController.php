<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class RegistrationController extends AbstractController
{
    #[Route(path: '/register', name: 'app_register')]
    public function register(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordEncoder, MailerInterface $mailer): Response
    {
        $form = $this->createForm(RegistrationFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $user->setRoles(['ROLE_USER']);

            // Hachez le mot de passe
            $plainPassword = $form->get('password')->getData();
            $hashedPassword = $passwordEncoder->hashPassword($user, $plainPassword);
            $user->setPassword($hashedPassword);

            // Traitement du paiement Stripe
            try {
                $stripe = new \Stripe\StripeClient('sk_test_51MFEq4GwodRabcetF8riN0uXwTToj6aVcgnzVVmP4Oj424ssUrWVx02x3JHbXUJZB1yri9LS5Nav55WogLvylJXJ00VMD7ZGBk');
                $charge = $stripe->charges->create([
                    'amount' => 2000, // en centimes
                    'currency' => 'usd',
                    'description' => 'Frais inscription',
                    'source' => $_POST['stripeToken'],
                ]);
            } catch (\Stripe\Exception\CardException $e) {
                $this->addFlash('error', 'Erreur de paiement: ' . $e->getError()->message);
                return $this->redirectToRoute('app_register');
            }

            // Envoi d'un email de confirmation
            $email = (new Email())
                ->from('hello@example.com')
                ->to('you@example.com')
                ->subject('Time for Symfony Mailer!')
                ->text('Sending emails is fun again!')
                ->html('<p>See Twig integration for better HTML integration!</p>');
            $mailer->send($email);

            // Persistance de l'utilisateur dans la base de données
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

}
