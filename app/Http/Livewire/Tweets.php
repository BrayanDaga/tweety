<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class Tweets extends Component
{

    public $body;

    public function render()
    {
        return view('livewire.tweets', [
            'tweets' => current_user()->timeline()
        ]);
    }

    protected $rules = [
        'body' => 'required|max:255|min:3'
    ];

    public function store()
    {
        $this->validate();

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $this->body,
        ]);
    }
}
