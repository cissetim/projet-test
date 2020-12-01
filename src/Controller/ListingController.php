<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MaraudeRepository;

class ListingController extends AbstractController
{
    /**
     * @Route("/listing", name="listing")
     */
    public function index(MaraudeRepository $maraudeRepository): Response
    {
        $maraudes = $maraudeRepository->findAll();

        return $this->render('listing/index.html.twig', [
            'controller_name' => 'ListingController',
            'maraudes' => $maraudes
        ]);
    }
}
