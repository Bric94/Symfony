<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class HomeController extends AbstractController{

    // si je vais sur https://127.0.0.1:8000/home
    // j'afficherai le template de home/index.html.twig
    // en passant à la vue un paramètre controller_name dont la valeur est HomeController
    #[Route('/home', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $articles = $entityManager->getRepository(Article::class)->findAll();
        /* dd($articles); */
        return $this->render('home/index.html.twig', [
            'articles' => $articles
        ]);
    }
}
