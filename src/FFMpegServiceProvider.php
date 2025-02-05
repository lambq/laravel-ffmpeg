<?php

namespace Lambq\LaravelFfmpeg;

use Illuminate\Support\ServiceProvider;
use Lambq\LaravelFfmpeg\FFMpeg;

class FFMpegServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-ffmpeg.php','laravel-ffmpeg');
        $this->registerPublishing();
    }

    public function register()
    {
        $this->app->singleton('LaravelFfmpeg', function ($app) {
            return $app->make(FFMpeg::class);
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return ['LaravelFfmpeg'];
    }

    /**
     * 资源发布注册.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config/laravel-ffmpeg.php' => config_path('laravel-ffmpeg.php'), 'laravel-ffmpeg']);
        }
    }
}
