<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/demo", name="demo")
     */
    public function demo(): Response
    {
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }
    
    /**
     * @Route("/test", name="test")
     */
    public function test()
    {

        return $this->render('demo/test.html.twig', [
            'controller_name' => 'Page de test',
        ]);
    }

    /**
     * @Route("/demo-websocket", name="demo_websocket", methods={"GET", "POST"})
     */
    public function demo_websocket(): Response
    {
        return $this->render('demo/websocket.html.twig');
    }
}
