<?php

namespace App\Providers;

use App\Contracts\PostRepositoryContract;
use App\Contracts\PostServiceContract;
use App\Repository\PostRepository;
use App\Services\PostService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PostRepositoryContract::class, PostRepository::class);
        $this->app->bind(PostServiceContract::class, PostService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
