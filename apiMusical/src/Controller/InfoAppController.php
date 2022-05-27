<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/info')]
class InfoAppController extends AbstractController
{
    #[Route('/', name: 'app_info_app')]
    public function index(): Response
    {
        return $this->render('info_app/index.html.twig', [
            'controller_name' => 'InfoAppController',
        ]);
    }
}
