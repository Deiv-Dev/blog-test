<?php

namespace App\Helpers;

use App\Entity\Article;

class ArticleReadingTime
{
    public function getReadingTime(string $articleText): int
    {
        $wordCount = str_word_count(strip_tags($articleText));
        $readingTime = ceil($wordCount / 200);
        return $readingTime;
    }
}