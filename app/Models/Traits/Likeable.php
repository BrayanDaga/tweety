<?php

namespace App\Models\Traits;

use App\Models\Like;
use App\Models\User;

trait Likeable
{

    public function isLikedBy(User $user)
    {
        return $this->likes()->where('user_id', $user->id)->exists();
        // return (bool) $user->likes->where('tweet_id', $this->id)->count();
    }



    public function likesCount()
    {
        return $this->likes()->count();
    }

    public function like($user = null)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id(),
            ]
        );
    }

    public function unlike($user = null)
    {
        $this->likes()->where([
            'user_id' => $user ? $user->id : auth()->id()
        ])->delete();
    }
}
