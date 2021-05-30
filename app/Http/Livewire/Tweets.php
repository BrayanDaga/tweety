<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class Tweets extends Component
{

    public Tweet $tweet;

    public function render()
    {
        return view('livewire.tweets');
    }


    public function like()
    {
        $this->tweet->like(current_user());
    }

    public function unlike()
    {
        $this->tweet->unlike(current_user());
    }

}
