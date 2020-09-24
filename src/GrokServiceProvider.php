<?php

namespace ElegantTechnologies\Grok;

use Illuminate\Support\ServiceProvider;

class GrokServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     * just d update
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'eleganttechnologies');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'grok');

        $this->publishes([
            __DIR__.'/public' => public_path('eleganttechnologies/grok'),
        ]);


        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }

        //Configure the routes offered by the application.
        // Still learning - this should work, but gives Trying to get property 'profile_photo_url' of non-object (View:
        #$this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        \Livewire::component('grok::a-a-nothing', \ElegantTechnologies\Grok\Components\DemoUiChunks\AANothing::class);
        \Livewire::component('grok::a-b-almost-nothing', \ElegantTechnologies\Grok\Components\DemoUiChunks\ABAlmostNothing::class);
        \Livewire::component('grok::a-c-nothing-but-formatted', \ElegantTechnologies\Grok\Components\DemoUiChunks\ACNothingButFormatted::class);
        \Livewire::component('grok::b-a-button', \ElegantTechnologies\Grok\Components\DemoUiChunks\BAButton::class);
        \Livewire::component('grok::b-b-button-count', \ElegantTechnologies\Grok\Components\DemoUiChunks\BBButtonCount::class);
        \Livewire::component('grok::b-c-button-modal', \ElegantTechnologies\Grok\Components\DemoUiChunks\BCButtonModal::class);
        \Livewire::component('grok::b-d-button-modal-dialog', \ElegantTechnologies\Grok\Components\DemoUiChunks\BDButtonModalDialog::class);
        \Livewire::component('grok::b-e-button-poll-reset', \ElegantTechnologies\Grok\Components\DemoUiChunks\BEButtonPollReset::class);
        \Livewire::component('grok::b-f-button-modal-wire', \ElegantTechnologies\Grok\Components\DemoUiChunks\BFButtonModalWire::class);
        \Livewire::component('grok::b-f-button-modal-wire-form', \ElegantTechnologies\Grok\Components\DemoUiChunks\BFButtonModalWireForm::class);
        \Livewire::component('grok::c-a-input', \ElegantTechnologies\Grok\Components\DemoUiChunks\CAInput::class);

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/grok.php', 'grok');

        // Register the service the package provides.
        $this->app->singleton('grok', function ($app) {
            return new Grok;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['grok'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/grok.php' => config_path('grok.php'),
        ], 'grok.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/eleganttechnologies'),
        ], 'grok.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/eleganttechnologies'),
        ], 'grok.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/eleganttechnologies'),
        ], 'grok.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
