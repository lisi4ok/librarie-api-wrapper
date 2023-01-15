<?php

namespace App\Helpers;

class LibrariesIOHelper
{
    public static function getUrl(string $query = ''): string
    {
        if (!$query) {
            $query = config('librariesio.default_search_query');
        }
        return config('librariesio.api_url') . '/' . config('librariesio.default_search_query') . '&api_key=' . config('librariesio.api_key');
    }
}
