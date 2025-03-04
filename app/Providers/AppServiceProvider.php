<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use App\Repositories\Auth\LoginUserRepository;
use App\Repositories\Auth\LoginUserRepositoryInterface;
use App\Services\Auth\LoginUserService;
use App\Repositories\Auth\LogoutUserRepository;
use App\Repositories\Auth\LogoutUserRepositoryInterface;
use App\Services\Auth\LogoutUserService;
use Illuminate\Contracts\Foundation\Application;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            LoginUserRepositoryInterface::class,
            LoginUserRepository::class,
        );        
        $this->app->bind(
            LoginUserService::class,
            function (Application $app) {
                return new LoginUserService(
                    $app->make(
                        LoginUserRepositoryInterface::class,
                    ),
                );
            },
        );
        
        $this->app->bind(
            LogoutUserRepositoryInterface::class,
            LogoutUserRepository::class,
        );        
        $this->app->bind(
            LogoutUserService::class,
            function (Application $app) {
                return new LogoutUserService(
                    $app->make(
                        LogoutUserRepositoryInterface::class,
                    ),
                );
            },
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
