<?php

namespace Lariele\Form;

use Illuminate\Support\ServiceProvider;
use Lariele\Form\Components\Editable\Text;
use Livewire\Livewire;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'form');
        $this->publishes([
            __DIR__.'/Resources/views' => resource_path('views/vendor/lariele/form'),
        ]);

        // Livewire::component('form-editable-text', Text::class);
    }
}
