<?php

namespace App\Controller;

use App\Repository\DynamicqcmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DynamicqcmController extends AbstractController
{
    #[Route('/themes', name: 'app_themes')]
    public function index(DynamicqcmRepository $dynamicqcmRepository): Response
    {
        $themes = $dynamicqcmRepository->findAll();

        return $this->render('themes/index.html.twig', [
            'themes' => $themes,
        ]);
    }
}