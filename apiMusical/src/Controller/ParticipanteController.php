<?php

namespace App\Controller;

use App\Entity\Participante;
use App\Form\ParticipanteType;
use App\Repository\ParticipanteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/participante')]
class ParticipanteController extends AbstractController
{
    #[Route('/', name: 'app_participante_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $participantes = $entityManager
            ->getRepository(Participante::class)
            ->findAll();

        return $this->render('participante/index.html.twig', [
            'participantes' => $participantes,
        ]);
    }
    #[Route('/imprimir', name: 'app_participante_pdfAction', methods: ['GET'])]
    public function pdfAction(EntityManagerInterface $entityManager, Pdf $knpSnappyPdf)
    {
        $participantes = $entityManager
            ->getRepository(Participante::class)
            ->findAll();
            

            $html = $this->renderView('imprimir.html.twig', [
                'participantes' => $participantes,
            ]);
            return new PdfResponse(
                $knpSnappyPdf->getOutputFromHtml($html),
                'file.pdf'
            );
    }

    #[Route('/new', name: 'app_participante_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $participante = new Participante();
        $form = $this->createForm(ParticipanteType::class, $participante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($participante);
            $entityManager->flush();

            return $this->redirectToRoute('app_participante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participante/new.html.twig', [
            'participante' => $participante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_participante_show', methods: ['GET'])]
    public function show(Participante $participante): Response
    {
        return $this->render('participante/show.html.twig', [
            'participante' => $participante,
            'musicals' => $participante->getMusicals()
        ]);
    }

    #[Route('/{id}/edit', name: 'app_participante_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participante $participante, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParticipanteType::class, $participante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_participante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participante/edit.html.twig', [
            'participante' => $participante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_participante_delete', methods: ['POST'])]
    public function delete(Request $request, Participante $participante, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participante->getId(), $request->request->get('_token'))) {
            $entityManager->remove($participante);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_participante_index', [], Response::HTTP_SEE_OTHER);
    }

    
}
