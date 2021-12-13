<?php

return [
    'driver' => 'mysql',
    'host' => env('DB_HOST', 'localhost'),
    'database' => env('DB_DATABASE', 'database'),
    'username' => env('DB_USERNAME', 'root'),
    'password' => env('DB_PASSWORD', null),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
];
