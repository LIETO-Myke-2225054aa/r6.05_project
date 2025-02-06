<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function index(UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        // Créer un nouvel utilisateur
        $user = new User();
        $user->setEmail('test@example.com');

        // Définir un mot de passe
        $plaintextPassword = 'password123';
        $hashedPassword = $passwordHasher->hashPassword($user, $plaintextPassword);
        $user->setPassword($hashedPassword);

        // Sauvegarde en base
        $entityManager->persist($user);
        $entityManager->flush();

        return new Response('Utilisateur créé avec succès');
    }
}
