<?php

namespace App\Helpers;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class CacheHelper
{
    public function clearCache()
    {
        $cache = new FilesystemAdapter();
        $cache->clear();
    }
}