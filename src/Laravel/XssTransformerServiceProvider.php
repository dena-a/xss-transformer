<?php

namespace Dena\XssTransformer\Laravel;

use Illuminate\Support\ServiceProvider;

class XssTransformerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/xss.php', 'xss');
        $this->publishes([
            __DIR__ . '/../config/xss.php' => config_path('xss.php'),
        ], 'config');

        if ($this->isLumen()) {
            $this->app->configure('xss');
        }
    }

    /**
     * Check if app uses Lumen.
     *
     * @return bool
     */
    private function isLumen(): bool
    {
        return str_contains($this->app->version(), 'Lumen');
    }
}
