<?php

namespace App\Controller;

use Faker;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index(ArticleRepository $repo): Response
    {
        $articles = $repo->findLastArtciles(4);

        $faker = Faker\Factory::create('fr_FR');
        $intro = $faker->paragraph(2);
        $contenu = ["pomme", "poire", "figue", "grenade", "test"];
        $content = "<p>" . implode("</p><p>", $faker->paragraphs(7)) . "</p>";
        dump($faker->paragraphs(7));



        return $this->render('home/index.html.twig', [
            "articles" => $articles,


        ]);
    }
}
