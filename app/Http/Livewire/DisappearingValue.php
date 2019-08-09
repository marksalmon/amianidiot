<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DisappearingValue extends Component
{
    public $foo;
    public $bar;
    public $saved;

    public function mount()
    {
        $this->foo = 'foo';
        $this->bar = 'bar';
    }

    public function updated($name, $value)
    {
        $this->saved = $name;
    }

    public function render()
    {
        return view('livewire.disappearing-value');
    }
}
