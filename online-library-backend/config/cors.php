<?php

return [

    'paths' => ['api/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'], // Adjust this as necessary for your Vue.js frontend

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
