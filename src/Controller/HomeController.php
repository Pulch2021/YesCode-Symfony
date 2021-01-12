<?php

namespace App\Controller;

use Faker;
use Cocur\Slugify\Slugify;
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

        $articles = $repo->findLastArticles(3);

        $slugify = new Slugify();

        $title = "La théorie £ % 4 4 { é # des cordes à Linges * Gravitionnelles";

        $slug = $slugify->slugify($title);

        dump($slug);



        return $this->render('home/index.html.twig', [
            "articles" => $articles,

        ]);
    }
}
