<?php

// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Film;

class HomeController extends AbstractController
{

    // Annotation qui permet à Symfony de retrouver quelle route correspond à quelle fonction 
    #[Route('/cinefile', name: 'app_cinefile')]
    public function cinefile(): Response
    {
        // Trop compliqué pour l'instant, je n'y arrive pas, mais il n'y aura pas d'autre choix que d'utiliser une boucle lorsqu'il y aura plus de films à ajouter 
        // $films = array();
        // $titles = array("The Shining", "Le Parrain", "The Dark Knight", "Pulp Fiction", "Le Bon, la Brute et le Truand");
        // $dates = array(1980, 1972, 2008, 1994, 1966);

        // for ($i = 0; $i < count($titles); $i++) {
        //     $films[] = new Film($titles[$i], $dates[$i]);
        // }

        $film1 = new Film();
        $film1->setTitle('The Shining');
        $film1->setDate('1980');
        $film1->setAuthor('Stanley Kubrick');

        $film2 = new Film();
        $film2->setTitle('Le Parrain');
        $film2->setDate('1972');
        $film2->setAuthor('Francis Ford Coppola');


        $film3 = new Film();
        $film3->setTitle('The Dark Knight');
        $film3->setDate('2008');
        $film3->setAuthor('Christopher Nolan');


        $film4 = new Film();
        $film4->setTitle('Pulp Fiction');
        $film4->setDate('1994');
        $film4->setAuthor('Quentin Tarantino');


        $film5 = new Film();
        $film5->setTitle('The Good, the Bad and the Ugly');
        $film5->setDate('1966');
        $film5->setAuthor('Sergio Leone');


        return $this->render('menu.html.twig', [
            'film1' => $film1,
            'film2' => $film2,
            'film3' => $film3,
            'film4' => $film4,
            'film5' => $film5,
        ]);
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
