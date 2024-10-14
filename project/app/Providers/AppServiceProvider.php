<?php

namespace App\Providers;

use ApiPlatform\State\ProviderInterface;
use App\State\CatProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CatProvider::class, function (Application $app) {
            return new CatProvider();
        });

        $this->app->tag([CatProvider::class], ProviderInterface::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
