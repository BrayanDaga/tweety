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


    public function like(Tweet $tweet)
    {
        $tweet->like(current_user());
    }

    public function unlike(Tweet $tweet)
    {
        $tweet->unlike(current_user());
    }

}
