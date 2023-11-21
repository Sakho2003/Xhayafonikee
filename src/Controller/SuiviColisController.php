<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuiviColisController extends AbstractController
{
    #[Route('/suivi/colis', name: 'app-suivi_colis')]
    public function index(): Response
    {
        return $this->render('suivi_colis/index.html.twig', [
            'controller_name' => 'SuiviColisController',
        ]);
    }
}
