<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontOfficeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        // Lire le contenu du fichier HTML du template client
        $templatePath = $this->getParameter('kernel.project_dir') . '/templates/template-client/index.html';
        
        if (!file_exists($templatePath)) {
            throw $this->createNotFoundException('Template not found');
        }
        
        $content = file_get_contents($templatePath);
        
        // Remplacer les chemins relatifs des assets pour pointer vers /FO/assets/
        $content = preg_replace('/(href|src)="\.\.\/FO\/assets\//', '$1="/FO/assets/', $content);
        
        return new Response($content);
    }

    #[Route('/artworks', name: 'artworks')]
    public function artworks(): Response
    {
        return new Response('<h1>Page des œuvres (à venir)</h1>');
    }

    #[Route('/artists', name: 'artists')]
    public function artists(): Response
    {
        return new Response('<h1>Page des artistes (à venir)</h1>');
    }

    #[Route('/events', name: 'events')]
    public function events(): Response
    {
        return new Response('<h1>Page des événements (à venir)</h1>');
    }

    #[Route('/marketplace', name: 'marketplace')]
    public function marketplace(): Response
    {
        return new Response('<h1>Page marketplace (à venir)</h1>');
    }

    #[Route('/community', name: 'community')]
    public function community(): Response
    {
        return new Response('<h1>Page communauté (à venir)</h1>');
    }
}
