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

        return $this->render('home/index.html.twig', []);
    }

    /**
     * @Route("/articles", name="articles_list")
     */
    public function articles_list(): Response
    {

        return $this->render('home/articles.list.html.twig', []);
    }
}
