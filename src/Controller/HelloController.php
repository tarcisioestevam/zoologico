<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route(path: '/')]
    public function index(): Response
    {
        return new Response('Olá!');
    }
}