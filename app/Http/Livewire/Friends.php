<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Friends extends Component
{
    protected $listeners = ['followToggle' => 'render'];
    public function render()
    {
        return view('livewire.friends');
    }
}
