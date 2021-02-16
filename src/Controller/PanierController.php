<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $session, ProduitRepository $produitRepository): Response
    {
        $panier = $session->get('panier', []);

        $panierWithData = [];
        foreach($panier as $id => $quantity) {
            $panierWithData[] = [
                'produit' => $produitRepository->find($id),
                'quantity' => $quantity
            ];
        }

        return $this->render('panier/index.html.twig', [
            'items' => $panierWithData
        ]);
    
    } 

    /**
     * @Route("/panier/add/{id}", name="panier_add")
     */
    public function add($id, SessionInterface $session) {
        
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }
        

        $session->set('panier', $panier);

        dd($session->get('panier'));
    }
}
