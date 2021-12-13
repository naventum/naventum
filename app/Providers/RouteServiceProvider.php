<?php

namespace App\Providers;

use Naventum\Framework\Illuminate\Support\Facades\Route as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->addRoutePath('../routes/web.php');
    }
}
