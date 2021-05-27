<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class Timeline extends Component
{
    protected $listeners = ['tweetAdded' => 'render '];

    public function render()
    {
        return view('livewire.timeline', [
            'tweets' => current_user()->timeline()
        ]);
    }
}
