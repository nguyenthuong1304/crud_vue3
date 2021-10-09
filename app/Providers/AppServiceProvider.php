<?php

namespace App\Providers;

use App\Repositories\CompanyRepository;
use App\Repositories\CompanyRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        CompanyRepositoryInterface::class => CompanyRepository::class,
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
