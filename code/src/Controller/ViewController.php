<?php

namespace App\Controller;

use App\Entity\Article;

use App\Helpers\ArticalFormHelper;
use App\Helpers\CacheHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/article/{id}', name: 'article_view')]
    public function view(Article $article): Response
    {
        return $this->render('pages/view.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/article-update/{id}', name: 'article_update')]
    public function viewUpdate(Article $article, Request $request, ArticalFormHelper $ArticalFormHelper, CacheHelper $cacheHelper): Response
    {
        try {
            $form = $ArticalFormHelper->createArticleForm($article, $request);
            if ($form->isSubmitted() && $form->isValid()) {
                $ArticalFormHelper->handleArticleUpdate($form, $article);
                $cacheHelper->clearCache();
                $this->addFlash('success', 'Article updated successfully!');
            }
            return $this->renderArticleUpdatePage($article, $form);
        } catch (\Exception $e) {
            $this->addFlash('error', 'An error occurred. Please try again later.');
            return $this->renderArticleUpdatePage($article, $form);
        }
    }

    private function renderArticleUpdatePage(Article $article, FormInterface $form): Response
    {
        return $this->render('pages/article-update.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }
}