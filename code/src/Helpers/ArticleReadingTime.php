<?php

namespace App\Helpers;

use App\Entity\Article;

class ArticleReadingTime
{
    public function getReadingTime(Article $article): int
    {
        $text = $article->getText();
        $wordCount = str_word_count(strip_tags($text), 3);
        $readingTime = ceil($wordCount / 200);
        return $readingTime;
    }
}