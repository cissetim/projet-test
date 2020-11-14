<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewMaraudeController extends AbstractController
{
    /**
     * @Route("/new/maraude", name="new_maraude")
     */
    public function index(): Response
    {
        return $this->render('new_maraude/index.html.twig', [
            'controller_name' => 'NewMaraudeController',
        ]);
    }
}
