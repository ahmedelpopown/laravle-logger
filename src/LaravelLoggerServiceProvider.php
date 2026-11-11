<?php
namespace Ahmedelpopown\LaravelLogger;

use Ahmedelpopown\LaravelLogger\Services\LaravelLoggerService;
use Illuminate\Support\ServiceProvider;

class LaravelLoggerServiceProvider extends ServiceProvider{


public function register(){
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    $this->loadViewsFrom(__DIR__.'/resources/views','logger');
    $this->mergeConfigFrom(__DIR__.'/config/laravel-logger.php','laravel-logger');
    $this->app->singleton(LaravelLoggerService::class, function($app){
        return new LaravelLoggerService();
    });

}
public function boot(){
      $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    $this->publishes([
        __DIR__.'/config/laravel-logger.php'=>config_path('laravel-logger.php'),
        __DIR__.'/resources/views'=>resource_path('home'),
        __DIR__.'/database/migrations'=>database_path('laravel-logger'),
    ],'laravel-logger');
    
 
}
}