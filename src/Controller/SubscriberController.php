<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SubscriberController extends AbstractController
{
    /**
     * @Route("/subscriber", name="subscriber")
     */
    public function index()
    {
        return $this->render('subscriber/index.html.twig', [
            'controller_name' => 'SubscriberController',
        ]);
    }
}
