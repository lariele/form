<?php

namespace Lariele\Form\Components\Editable;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Text extends Input
{
    public function render(): Factory|View|Application
    {
        return view('form::components.text');
    }
}
