<?php

// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    // Annotation qui permet à Symfony de retrouver quelle route correspond à quelle fonction 
    #[Route('/cinefile', name: 'app_cinefile')]
    public function cinefile(): Response
    {
        return $this->render('menu.html.twig');
    }

    // Annotation qui permet à Symfony de retrouver quelle route correspond à quelle fonction 
    #[Route('/cinefile/{userName}', name: 'app_user')]
    public function user($userName): Response
    {
        return $this->render('user.html.twig', [
            'userName' => $userName,
        ]);
    }
}
