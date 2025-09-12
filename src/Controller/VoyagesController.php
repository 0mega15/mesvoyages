<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Description of VoyagesController
 *
 * @author enzog
 */
class VoyagesController extends AbstractController{
    
    #[Route('/voyages', name: 'voyages')]
    public function index(): Response {
        return $this->render("pages/voyages.html.twig");
    }
}
