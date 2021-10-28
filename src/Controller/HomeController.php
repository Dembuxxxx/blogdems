<?php

namespace App\Controller;


use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {   

        $post = new Post();
        $post->setTitle('Titre 1')
            ->setContent("Lorem ipsum")
            ->setAuthor('Demba Soumare')
            ->setCreateAt(new \DateTime());

          


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            "post" => $post
        ]);
    }
}
