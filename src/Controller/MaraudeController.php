<?php

namespace App\Controller;

use App\Entity\Maraude;
use App\Form\MaraudeType;
use App\Repository\MaraudeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/maraude")
 */
class MaraudeController extends AbstractController
{
    /**
     * @Route("/", name="maraude_index", methods={"GET"})
     */
    public function index(MaraudeRepository $maraudeRepository): Response
    {
        return $this->render('maraude/index.html.twig', [
            'maraudes' => $maraudeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="maraude_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $maraude = new Maraude();
        $form = $this->createForm(MaraudeType::class, $maraude);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($maraude);
            $entityManager->flush();

            return $this->redirectToRoute('maraude_index');
        }

        return $this->render('maraude/new.html.twig', [
            'maraude' => $maraude,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maraude_show", methods={"GET"})
     */
    public function show(Maraude $maraude): Response
    {
        return $this->render('maraude/show.html.twig', [
            'maraude' => $maraude,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="maraude_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Maraude $maraude): Response
    {
        $form = $this->createForm(MaraudeType::class, $maraude);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('maraude_index');
        }

        return $this->render('maraude/edit.html.twig', [
            'maraude' => $maraude,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maraude_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Maraude $maraude): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maraude->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($maraude);
            $entityManager->flush();
        }

        return $this->redirectToRoute('maraude_index');
    }
}
