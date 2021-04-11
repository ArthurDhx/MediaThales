<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @return Response
     * Affiche la page d' accueil
     */
    public function home(): Response {
        return $this->render('./base/base.html.twig');
    }
}
