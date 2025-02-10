<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Annotation\Route;

class EmailController extends AbstractController
{
    #[Route('/emails', name: 'app_emails')]
    public function index(): Response
    {
        if (!$this->getUser()) {
                return $this->redirectToRoute('app_login');

        }
        $client = HttpClient::create();
        $response = $client->request('GET', 'http://127.0.0.1:8001/api/user_profiles?page=1'); // Mets l'URL de ton API
        $data = $response->toArray();

        $emails = $data['member'] ?? [];

        return $this->render('emails/index.html.twig', [
            'emails' => $emails
        ]);
    }
}