<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AproposController extends AbstractController
{
    #[Route('/apropos', name: 'apropos')]
    public function aPropos(): Response
    {
        return $this->render('apropos.html.twig', [
            'controller_name' => 'AproposController',
        ]);
    }
}
