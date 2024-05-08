<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\Services\EmployeeServiceInterface;
use App\Services\EmployeeService;
use App\Domains\ProviderDataMapper;
use App\Interfaces\Domains\ProviderDataMapperInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(RouteServiceProvider::class);

        $this->app->bind(EmployeeServiceInterface::class, EmployeeService::class);
        $this->app->bind(ProviderDataMapperInterface::class, ProviderDataMapper::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
