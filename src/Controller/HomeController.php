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
        // sans injection de dépendance , donc retirer l'injection
        // $manager = $this->getDoctrine()->getManager();
        $fraise = new Fruit();
        $ananas = new fruit();


        $fraise->setName("fraise");
        $ananas->setName("ananas");


        // dit à doctrine on veut sauvegarder l'objet fruit
        $manager->persist($fraise);
        $manager->persist($ananas);

        // flush pour tout | exéccute la requête
        $manager->flush();


        return $this->render('home/index.html.twig', []);
    }
}
