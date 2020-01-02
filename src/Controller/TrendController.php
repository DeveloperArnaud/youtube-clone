<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TrendController extends AbstractController
{
    /**
     * @Route("/trend", name="trend")
     */
    public function index()
    {
        return $this->render('trend/index.html.twig', [
            'controller_name' => 'TrendController',
        ]);
    }
}
