<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FellingUserController extends AbstractController
{
    #[Route('/felling', name: 'app_felling_user')]
    public function index(): Response
    {
        return $this->render('felling_user/index.html.twig', [
            'controller_name' => 'FellingUserController',
        ]);
    }
}
