<?php

namespace App\Controller;

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
        // je déclare un nom qui sera envoyé à la vue
        // contenant ->page d'accueil
        return $this->render('home/index.html.twig', [
            "name" => "Page d'accueil",
        ]);
    }
}
