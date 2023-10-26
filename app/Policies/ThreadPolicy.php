<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Thread;

class ThreadPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Thread $thread)
    {
        return $user->id === $thread->user_id;
    }
}
