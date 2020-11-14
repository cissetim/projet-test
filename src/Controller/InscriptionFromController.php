<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionFromController extends AbstractController
{
    /**
     * @Route("/inscription/from", name="inscription_from")
     */
    public function index(): Response
    {
        return $this->render('inscription_from/index.html.twig', [
            'controller_name' => 'InscriptionFromController',
        ]);
    }
}
