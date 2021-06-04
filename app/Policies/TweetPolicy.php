<?php

namespace App\Policies;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TweetPolicy
{
    use HandlesAuthorization;

    public function delete(User $currentUser, Tweet $tweet)
    {
        return $currentUser->is($tweet->user);
    }


}
