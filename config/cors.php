<?php

return [
    'paths' => ['api/*'], // Only apply CORS to API routes
    'allowed_methods' => ['*'], // Allow all HTTP methods (GET, POST, PUT, DELETE, etc.)
    'allowed_origins' => explode(',', env('allowed_sites')), // Allow only specific Angular domains
    'allowed_origins_patterns' => [], // Use regex if needed
    'allowed_headers' => ['*'], // Allow all headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
