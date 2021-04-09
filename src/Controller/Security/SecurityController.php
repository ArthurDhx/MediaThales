<?php

namespace App\Controller\Security;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/", name="security_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     * Affiche la page pour se connecter au site
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {   if($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            $this->redirectToRoute('home');
        }
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('connexion/main.html.twig', [
            'last_username' => $lastUsername, 'error' => $error
        ]);
    }

    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout() {}
}
