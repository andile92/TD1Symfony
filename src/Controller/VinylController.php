<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('a', name: 'Home')]
    public function homepage()
    {
        return new Response('PHP EIYUU');
           
    }
    #[Route('/browse', name: 'Titre1')]
    public function browseAll()
    {
        
        return new Response('Tous les genres');
    }
    #[Route('/browse/{param}', name: 'Titre2')]
    Public function browseSpecific(string $param):Response 
    {
        return new Response ($param);
    }
    



}
