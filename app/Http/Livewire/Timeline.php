<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class Timeline extends Component
{
    use WithPagination;

    protected $listeners = [
        'tweetAdded' => 'render',
        'deleteTweet' => 'render'
    ];

    public $view;
    public User $user;

    public function render()
    {

        if ($this->view == 'profile') {
            return view('livewire.timeline', [
                'user' => $this->user,
                'tweets' => $this->user
                    ->tweets()
                    ->paginate(),
            ]);
        }else{
            return view('livewire.timeline', [
                'tweets' => current_user()->timeline()
            ]);
        }
    }
}
