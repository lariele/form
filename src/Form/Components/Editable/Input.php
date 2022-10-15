<?php

namespace Lariele\Form\Components\Editable;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Input extends Component
{
    public $content = null;

    public bool $editing = false;

    public $class;
    public $inputClass;
    public $wrapperClass;

    public $wireModel;

    public $after;
}
