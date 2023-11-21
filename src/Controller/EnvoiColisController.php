<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnvoiColisController extends AbstractController
{
    #[Route('/envoi/colis', name: 'app-envoi_colis')]
    public function index(): Response
    {
        return $this->render('envoi_colis/index.html.twig', [
            'controller_name' => 'EnvoiColisController',
        ]);
    }
}
