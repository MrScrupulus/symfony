<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AproposController extends AbstractController
{
    #[Route('/aPropos', name: 'aPropos')]
    public function aPropos(): Response
    {
        return $this->render('apropos.html.twig');
    }
}