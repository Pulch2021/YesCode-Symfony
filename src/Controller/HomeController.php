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
        // je déclare une variable PHP de type string
        $author = "Loïs Lane";

        // instancie un objet standard PHP sans class
        // on fait l'import | NameSpaceResolver->plugin
        $article = new stdClass();

        // on attribue des propriétés  à l'objet
        $article->title = "Théorie du complot";
        $article->intro = "Fascine depuis les lustres ! on vous dit tout";
        $article->content = "Bla bla bla , Pa pa pa, Po po po";

        // je déclare une variable
        $picture = "https://www.rollingstone.com/wp-content/uploads/2019/12/andre-3000.jpg";


        // on transmet tout à la vue , pour l'afficher
        return $this->render('home/index.html.twig', [
            "name"    => "Page d'accueil",
            "article" => $article,
            "auteur"  => $author,
            "image"   => $picture

        ]);
    }
}
