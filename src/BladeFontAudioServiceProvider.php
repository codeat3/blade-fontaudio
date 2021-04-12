<?php

declare(strict_types=1);

namespace Codeat3\BladeFontAudio;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeFontAudioServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('font-audio', [
                'path' => __DIR__.'/../resources/svg',
                'prefix' => 'fontaudio',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-fontaudio'),
            ], 'blade-fontaudio');
        }
    }
}
