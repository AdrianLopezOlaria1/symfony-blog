<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SinglePostController extends AbstractController
{
    #[Route('/single_post', name: 'app_single_post')]
    public function index(): Response
    {
        return $this->render('single_post/index.html.twig', [
            'controller_name' => 'SinglePostController',
        ]);
    }
}
