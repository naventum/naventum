## Naventum

The Naventum simple PHP Framework

<p align="center">
<a href="https://github.com/naventum/naventum/actions/workflows/codeql-analysis.yml"><img src="https://github.com/naventum/naventum/actions/workflows/codeql-analysis.yml/badge.svg" alt="CodeQL"></a>
<a href="https://github.com/naventum/naventum/actions/workflows/ci.yml">
        <img src="https://github.com/naventum/naventum/actions/workflows/ci.yml/badge.svg" alt="CI Tests"></a>
<a href="https://packagist.org/packages/naventum/naventum"><img src="https://img.shields.io/packagist/dt/naventum/naventum" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/naventum/naventum"><img src="https://img.shields.io/packagist/v/naventum/naventum" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/naventum/naventum"><img src="https://img.shields.io/packagist/l/naventum/naventum" alt="License"></a>
</p>

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
