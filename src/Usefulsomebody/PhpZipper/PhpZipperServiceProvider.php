<?php

namespace Usefulsomebody\PhpZipper;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class PhpZipperServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('phpzipper', function ($app) {
            $return = $app->make('Usefulsomebody\PhpZipper\PhpZipper');

            return $return;
        });

        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('PhpZipper', 'Usefulsomebody\PhpZipper\Facades\PhpZipper');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['phpzipper'];
    }
}
