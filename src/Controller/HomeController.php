<?php

namespace App\Controller;


use App\Entity\Fruit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index(EntityManagerInterface $manager): Response
    {
        // sans injestion de dépendance , donc retirer l'injection
        // $manager = $this->getDoctrine()->getManager();
        $fraise = new Fruit();
        $fraise->setName("fraise");

        $manager->persist($fraise);
        $manager->flush();


        return $this->render('home/index.html.twig', []);
    }
}
