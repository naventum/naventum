## Naventum

The Naventum simple PHP Framework

[![PHP Composer](https://github.com/rizkytegar/naventum/actions/workflows/php.yml/badge.svg)](https://github.com/rizkytegar/naventum/actions/workflows/php.yml)
![](https://github.styleci.io/repos/457622076/shield?branch=1.x)
[![CodeQL](https://github.com/rizkytegar/naventum/actions/workflows/codeql-analysis.yml/badge.svg)](https://github.com/rizkytegar/naventum/actions/workflows/codeql-analysis.yml)
[![Total Downloads](https://poser.pugx.org/naventum/naventum/downloads.svg)](https://packagist.org/packages/naventum/naventum)
[![License](https://poser.pugx.org/naventum/naventum/license.svg)](https://packagist.org/packages/naventum/naventum)
### Installation
The best way to use this boilerplate is using [Composer](https://getcomposer.org/).

```bash
composer create-project naventum/naventum app-name
```
#### Run local server
Run the server using default php.
```bash
php -S localhost:8000 -t public
```

#### Authentication
Naventum default authentication.
```bash
composer require naventum/naventum-auth
```
Register the naventum auth provider 
```Naventum\NaventumAuth\Illuminate\Foundation\Support\NaventumauthServiceProvider``` at ```config/app.php```
```php
...
'providers' => [
        /*
         * Naventum Framework Service Providers...
         */
        Naventum\Framework\Illuminate\Debug\DebugServiceProvider::class,
        Naventum\Framework\Illuminate\Foundation\Support\Providers\AuthServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\AppServiceProvider::class,

        Naventum\NaventumAuth\Illuminate\Foundation\Support\NaventumauthServiceProvider::class,
        ...
]
```
For configuring features, create a php file ```config/naventum-auth.php```, fill
```php
<?php

return [
    'features' => [
        'login' => env('NAVENTUM_AUTH_LOGIN', true),
        'register' => env('NAVENTUM_AUTH_REGISTER', true),
    ]
];
```
Login : [http://localhost:8000/auth/login](http://localhost:8000/auth/login)

Register : [http://localhost:8000/auth/register](http://localhost:8000/auth/register)

An example of a simple application using Naventum, [click here](https://github.com/ryodevz/naventum-example).



### Security Vulnerabilities
If you discover a security vulnerability within Naventum, please send an e-mail to Naventum Email via [mail.naventum@gmail.com](mailto:mail.naventum@gmail.com). All security vulnerabilities will be promptly addressed.


### License
The Naventum framework is open-sourced software licensed under the MIT license.
