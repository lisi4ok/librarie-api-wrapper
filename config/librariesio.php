<?php

return [

    'api_key' => env('LIBRARIES_IO_API_KEY', '6586aeb5dc3ed456aa26b4387909b29a'),

    'api_url' => rtrim(env('LIBRARIES_IO_API_URL', 'https://libraries.io/api'), '/'),

    'default_search_query' => env('LIBRARIES_IO_DEFAULT_QUERY', 'search?languages=PHP&order=desc&sort=created_at'),

];
