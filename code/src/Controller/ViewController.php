<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ArticleType;

use Doctrine\Persistence\ManagerRegistry;

class ViewController extends AbstractController
{
    #[Route('/article/{id}', name: 'article_view')]
    public function view(Article $article): Response
    {
        return $this->render('pages/view.html.twig', [
            'article' => $article,
        ]);
    }

    private $registry;

    public function __construct(ManagerRegistry $registry)
    {
        $this->registry = $registry;
    }

    #[Route('/article-update/{id}', name: 'article_update')]
    public function viewUpdate(Article $article, Request $request): Response
    {
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $entityManager = $this->registry->getManager();
            $entityManager->persist($article);
            $entityManager->flush();

            $cache = new FilesystemAdapter();
            $cache->clear();

            return $this->render('pages/article-update.html.twig', [
                'article' => $article,
                'form' => $form->createView(),
            ]);
        }

        return $this->render('pages/article-update.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }
}