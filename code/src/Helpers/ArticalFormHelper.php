<?php

namespace App\Helpers;

use App\Entity\Article;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class ArticalFormHelper
{
    private $registry;
    private $formFactory;

    public function __construct(ManagerRegistry $registry, FormFactoryInterface $formFactory)
    {
        $this->registry = $registry;
        $this->formFactory = $formFactory;
    }

    public function handleArticleValidation(FormInterface $form, Article $article): void
    {
        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleArticleUpdate($form, $article);
        }
    }

    public function createArticleForm(Article $article, Request $request): FormInterface
    {
        $form = $this->formFactory->create(\App\Form\ArticleType::class, $article);
        $form->handleRequest($request);
        return $form;
    }

    public function handleArticleUpdate(FormInterface $form, Article $article): void
    {
        $article = $form->getData();
        $entityManager = $this->registry->getManager();
        $entityManager->persist($article);
        $entityManager->flush();
    }
}