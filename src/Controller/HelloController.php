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

    #[Route(path: '/moluscos')]
    public function molusco(): Response
    {
        return new Response('Olá, moluscos!');
    }

    #[Route(path: '/insetos')]
    public function inseto(): Response
    {
        return new Response('Olá, insetos!');
    }

    #[Route(path: '/felinos')]
    public function felino(): Response
    {
        return new Response('Olá, felinos!');
    }

    #[Route(path: '/caninos')]
    public function canino(): Response
    {
        return new Response('Olá, caninos!');
    }
}