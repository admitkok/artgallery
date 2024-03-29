<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select(['id', 'name'])
            ->withCount('posts')
            ->with('posts.media', 'posts.categories', 'posts.author')
            ->get();
        return view('site.users.index', [
            'users' => $users,
        ]);
    }

    public function show(User $user)
    {
        $user = $user->load('posts.media', 'posts.categories', 'posts.author');
        return view('site.users.show', [
            'user' => $user,
        ]);

    }
}
