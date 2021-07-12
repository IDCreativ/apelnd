<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        // return $this->render('pages/home.html.twig', [
        //     'controller_name' => 'Accueil',
        // ]);
        if (!$this->getUser()) {
            
            return $this->redirectToRoute('app_login');
        }
        else {
            return $this->redirectToRoute('fete_de_fin_d_annee_2021');
        }
    }

    /**
     * @Route("/fete-de-fin-d-annee-2021", name="fete_de_fin_d_annee_2021")
     */
    public function fete_de_din_d_annee_2021()
    {
        if (!$this->isGranted('ROLE_VIEWER')) {
            $this->addFlash('danger', 'Vous n\'avez pas accès à cette page');
            return $this->redirectToRoute('je_suis_perdu');
        }
        return $this->render('pages/fete-de-fin-d-annee-2021.html.twig', [
            'controller_name' => 'SPECTACLE DE FIN D\'ANNÉE 2021',
            'tagline' => 'Le Cirque'
        ]);
    }

    /**
     * @Route("je-suis-perdu", name="je_suis_perdu", methods={"GET"})
     */
    public function je_suis_perdu()
    {
        return $this->render('pages/lost.html.twig', [
            'controller_name' => 'Je suis perdu ...'
        ]);
    }
}
