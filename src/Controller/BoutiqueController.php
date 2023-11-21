<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoutiqueController extends AbstractController
{
    #[Route('/boutique', name: 'app_boutique')]
    public function index(): Response
    {
        // Logique pour récupérer les produits de la boutique depuis la base de données
        $produits = [
            [
                'nom' => 'Chemise en Coton',
                'description' => 'Qualité supérieure, idéale pour toutes les occasions.',
                'prix' => 49.99,
            ],
            [
                'nom' => 'Chaussures de Sport',
                'description' => 'Confortables et stylées pour un style actif.',
                'prix' => 59.99,
            ],
            // d'autres produits ici
        ];

        return $this->render('boutique/index.html.twig', [
            'produits' => $produits,
        ]);
    }
}