<?php


namespace App\Controller;


use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/home", name="home")
     * @param GenreRepository $genreRepository
     * @return Response
     * Affiche la page d' accueil
     */
    public function home(GenreRepository $genreRepository): Response {
        return $this->render('base/base.html.twig', [
            'genres' => $genreRepository->findAll()
        ]);

    }
}
