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

    #[Route(path: '/dinossauros')]
    public function dinossauro(): Response
    {
        return new Response('Olá, dinossauro!');
    }

    #[Route(path: '/mamiferos')]
    public function mamifero(): Response
    {
        return new Response('Olá, mamíferos!');
    }

    #[Route(path: '/invertebrados')]
    public function invertebrado(): Response
    {
        return new Response('Olá, invertebrados!');
    }
}