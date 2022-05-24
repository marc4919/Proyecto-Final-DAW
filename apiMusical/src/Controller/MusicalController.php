<?php

namespace App\Controller;

use App\Entity\Musical;
use App\Form\MusicalType;
use App\Repository\MusicalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/musical')]
class MusicalController extends AbstractController
{
    #[Route('/', name: 'app_musical_index', methods: ['GET'])]
    public function index(MusicalRepository $musicalRepository): Response
    {
        return $this->render('musical/index.html.twig', [
            'musicals' => $musicalRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_musical_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MusicalRepository $musicalRepository, SluggerInterface $slugger): Response
    {
        $musical = new Musical();
        $form = $this->createForm(MusicalType::class, $musical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $brochureFile = $form->get('Cartel')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('carteles_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception(message: 'Ha ocurrido un error :(');
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $musical->setCartel($newFilename);
            }
            $musicalRepository->add($musical, true);

            return $this->redirectToRoute('app_musical_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('musical/new.html.twig', [
            'musical' => $musical,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_musical_show', methods: ['GET'])]
    public function show(Musical $musical): Response
    {
        return $this->render('musical/show.html.twig', [
            'musical' => $musical,
            'participantes' => $musical->getParticipantes()
        ]);
    }

    #[Route('/{id}/edit', name: 'app_musical_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Musical $musical, MusicalRepository $musicalRepository,  SluggerInterface $slugger): Response
    {
        $form = $this->createForm(MusicalType::class, $musical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $brochureFile = $form->get('Cartel')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('carteles_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception(message: 'Ha ocurrido un error :(');
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $musical->setCartel($newFilename);
            }
            $musicalRepository->add($musical, true);

            return $this->redirectToRoute('app_musical_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('musical/edit.html.twig', [
            'musical' => $musical,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_musical_delete', methods: ['POST'])]
    public function delete(Request $request, Musical $musical, MusicalRepository $musicalRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$musical->getId(), $request->request->get('_token'))) {
            $musicalRepository->remove($musical, true);
        }

        return $this->redirectToRoute('app_musical_index', [], Response::HTTP_SEE_OTHER);
    }
}
