<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FuturMauraudeController extends AbstractController
{
    /**
     * @Route("/futur/mauraude", name="futur_mauraude")
     */
    public function index(): Response
    {
        return $this->render('futur_mauraude/index.html.twig', [
            'controller_name' => 'FuturMauraudeController',
        ]);
    }
}
