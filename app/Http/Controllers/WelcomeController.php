<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $recent_news = Cache::remember('welcome.recent_news', 3600, function() {
            return Post::with(['media', 'categories', 'author'])->orderBy('published_at', 'desc')->take(4)->get();
        });

        $authors = Cache::remember('welcome.authors', 3600, function() {
            return User::all();
        });

        return view('welcome', compact('recent_news', 'authors'));
    }
}
