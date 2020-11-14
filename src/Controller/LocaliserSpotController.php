<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocaliserSpotController extends AbstractController
{
    /**
     * @Route("/localiser/spot", name="localiser_spot")
     */
    public function index(): Response
    {
        return $this->render('localiser_spot/index.html.twig', [
            'controller_name' => 'LocaliserSpotController',
        ]);
    }
}
