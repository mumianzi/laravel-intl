<?php

namespace Mumianzi\LaravelIntl;

use Illuminate\Foundation\Events\LocaleUpdated;
use Illuminate\Support\ServiceProvider;

class IntlServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // Register the service the package provides.
        $this->app->singleton(Countries::class, function ($app) {
            return (new Countries())->setLocale($app['config']['app.locale'])
                ->setFallbackLocale($app['config']['app.fallback_locale']);
        });

        $this->app->alias(Countries::class, 'intl.countries');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['intl.countries'];
    }
}
