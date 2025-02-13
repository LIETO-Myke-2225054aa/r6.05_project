<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LocaleController extends AbstractController
{
    #[Route('/change-locale/{_locale}', name: 'change_locale')]
    public function changeLocale(Request $request, string $_locale): RedirectResponse
    {
        // Stocke la langue dans la session
        $request->getSession()->set('_locale', $_locale);

        // Redirige vers la page précédente
        $referer = $request->headers->get('referer', $this->generateUrl('home'));

        return new RedirectResponse($referer);
    }
}
