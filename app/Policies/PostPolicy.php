<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\Response;
class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function postupdate(User $user, Post $post) : Response
    {
        return $user->id === $post->user_id
        ? Response::allow()
        : Response::deny('You do not own this post.');
    }

    public function postdelete(User $user, Post $post): Response
    {
       
        return $user->id === $post->user_id
                ? Response::allow()
                : Response::deny('You do not own this post.');
    }
}
