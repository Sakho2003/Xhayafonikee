<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TraitementEnvoiColisController extends AbstractController
{
    #[Route('/traitement/envoi/colis', name: 'app_traitement_envoi_colis')]
    public function index(): Response
    {
        return $this->render('traitement_envoi_colis/index.html.twig', [
            'controller_name' => 'TraitementEnvoiColisController',
        ]);
    }
}
