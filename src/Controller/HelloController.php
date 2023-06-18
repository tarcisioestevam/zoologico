<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class HelloController extends AbstractController
{
    #[Route(path: '/')]
    public function index(): Response
    {
        $users = [
            ['name' => 'Antônio Barbosa',   'phone' => '(81) 95848-2948'],
            ['name' => 'Veronilda Estevam', 'phone' => '(81) 95849-2930'],
            ['name' => 'Tádzio Estevam',    'phone' => '(81) 92839-2910'],
            ['name' => 'Taciana Estevam',   'phone' => '(81) 93829-2930'],
            ['name' => 'Thaís Estevam',     'phone' => '(81) 93829-3940'],
            ['name' => 'Tarcísio Estevam',  'phone' => '(81) 93949-4939'],
            ['name' => 'Tacila Estevam',    'phone' => '(81) 92038-2920'],
        ];

        return $this->render('hello/index.html.twig', [
            'title' => 'Zoológico',
            'users' => $users,
        ]);
    }

    #[Route(path: '/animal/{slug}')]
    public function animal(string $slug = null): Response
    {
        $newSlug = str_replace('-', ' ', $slug);
        $newSlug = u($newSlug)->title(true);
        return new Response('Olá, ' . $newSlug . '!');
    }
}