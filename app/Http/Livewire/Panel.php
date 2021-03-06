<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class Panel extends Component
{
    public $body;

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
        $this->body = '';


        $this->emit('tweetAdded');


    }

    public function render()
    {
        return view('livewire.panel');
    }
}
