<?php

namespace App\Providers;

use App\Services\ReportOne;
use App\Services\ReportTwo;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->tag([ReportOne::class, ReportTwo::class], 'reports');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
