<?php

namespace App\Providers;

use App\Repositories\Post\PostRepository;
use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryPostProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(PostRepositoryInterface::class,PostRepository::class);
    }

    public function boot()
    {
        //
    }
}
