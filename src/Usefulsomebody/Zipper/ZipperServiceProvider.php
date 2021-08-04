<?php

namespace Usefulsomebody\Zipper;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class ZipperServiceProvider extends ServiceProvider
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
        $this->app->singleton('zipper', function ($app) {
            $return = $app->make('Usefulsomebody\Zipper\Zipper');

            return $return;
        });

        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('Zipper', 'Usefulsomebody\Zipper\Facades\Zipper');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['zipper'];
    }
}
