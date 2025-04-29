<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\EmailService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(EmailService::class, function () {
            return new EmailService();
        });
    }
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
