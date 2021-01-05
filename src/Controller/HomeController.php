<?php

namespace App\Controller;

use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        $games = ["SuperMario", "Laracraft", "Fifa"];


        // on transmet tout à la vue , pour l'afficher
        return $this->render('home/index.html.twig', [
            "name"  => "page d'accueil",
            "games" => $games



        ]);
    }
}
