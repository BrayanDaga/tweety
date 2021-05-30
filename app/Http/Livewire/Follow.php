<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Follow extends Component
{
    public User $user;
    public function render()
    {
        return view('livewire.follow');
    }

    public function store()
    {
        current_user()->toggleFollow($this->user);
        $this->emit('followToggle');
    }

}
