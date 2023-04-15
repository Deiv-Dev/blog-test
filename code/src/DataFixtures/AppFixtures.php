<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        foreach ($this->getArticleData() as $articleData) {
            $article = new Article();

            $article->setTitle($articleData['name']);
            $article->setImage($articleData['img']);
            $article->setText($articleData['text']);

            $manager->persist($article);
        }

        $manager->flush();
    }

    /**
     * @return iterable<array>
     */
    protected function getArticleData(): iterable
    {
        yield [
            'name' => 'AI Transforms Recycling Industry',
            'img' => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b',
            'text' => file_get_contents(__DIR__ . '/Articles/article_1.txt'),
        ];

        yield [
            'name' => 'Teleportation Breakthrough',
            'img' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb',
            'text' => file_get_contents(__DIR__ . '/Articles/article_2.txt'),
        ];

        yield [
            'name' => 'Urban Farming Skyrockets',
            'img' => 'https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8',
            'text' => file_get_contents(__DIR__ . '/Articles/article_3.txt'),
        ];

        yield [
            'name' => "World's First Holographic Smartphone",
            'img' => 'https://images.unsplash.com/photo-1570101945621-945409a6370f',
            'text' => file_get_contents(__DIR__ . '/Articles/article_4.txt'),
        ];

        yield [
            'name' => 'Self-Driving Cars Reduce Traffic Fatalities',
            'img' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2',
            'text' => file_get_contents(__DIR__ . '/Articles/article_5.txt'),
        ];

        yield [
            'name' => 'Self-Flying Drones Revolutionize Delivery Industry',
            'img' => 'https://imgs.search.brave.com/DjLPnbdYnu7ePAASz34SiIzllAnZppy-QpZnVczFcbc/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9uYXRp/b25hbGludGVyZXN0/Lm9yZy9zaXRlcy9k/ZWZhdWx0L2ZpbGVz/L21haW5faW1hZ2Vz/L2Ryb25lLWNhbWVy/YS1pc29sYXRlZC1i/YWNrZ3JvdW5kLWhl/bGljb3B0ZXItdGVj/aG5vbG9neS0xNDQ2/MDU3LXB4aGVyZS5j/b21fLmpwZw',
            'text' => file_get_contents(__DIR__ . '/Articles/article_6.txt'),
        ];
    }
}