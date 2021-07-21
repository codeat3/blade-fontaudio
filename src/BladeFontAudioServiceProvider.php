<?php

declare(strict_types=1);

namespace Codeat3\BladeFontAudio;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;

final class BladeFontAudioServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-fontaudio', []);

            $factory->add('font-audio', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-fontaudio.php', 'blade-fontaudio');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-fontaudio'),
            ], 'blade-fontaudio');

            $this->publishes([
                __DIR__.'/../config/blade-fontaudio.php' => $this->app->configPath('blade-fontaudio.php'),
            ], 'blade-fontaudio-config');
        }
    }
}
