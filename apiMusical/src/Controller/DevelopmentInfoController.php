<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/development')]
class DevelopmentInfoController extends AbstractController
{
    #[Route('/', name: 'app_development_info')]
    public function index(): Response
    {
        return $this->render('development_info/index.html.twig', [
            'controller_name' => 'DevelopmentInfoController',
        ]);
    }
}
