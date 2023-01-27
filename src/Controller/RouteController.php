<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RouteController
{
    #[Route('/browse/{genre}/{numero_page}', name: 'Title', requirements: ['numero_page' => '\d+'])]
    public function typePage(string $genre, int $numero_page): Response
    {
        return new Response ($genre." - ".$numero_page);
    
    }
}
