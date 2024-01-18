<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public function welcome()
    {
        if(request()->has('referrer_id')) {
            session()->flash('referrer', User::find(request()->referrer_id)->name);
        }

        $recent_news = Cache::remember('welcome.recent_news', config('app.cache_ttl'), function() {
            return Post::isPublished()->with(['media', 'categories', 'author'])->orderBy('published_at', 'desc')->take(10)->get();
        });

        $authors = Cache::remember('welcome.authors', config('app.cache_ttl'), function() {
            return User::select(['name'])->with('posts')->get();
        });

        $riddle = $this->getRiddle();
        $joke = $this->getJoke();
        ray($riddle);
        ray($joke);

        return view('welcome', compact('recent_news', 'authors', 'riddle', 'joke'));
    }
    private function getRiddle():object
    {
        $endpoint = "https://api.api-ninjas.com/v1/riddles";
        $api_key = "Wyi27LYBZ4b8W7vfqgZ+Ww==yvK6t75Bj21Y4BCP";

        $response = Http::acceptJson()
            ->withHeaders(['X-API-KEY' => $api_key])
            ->get($endpoint);

        return json_decode($response->body())[0];
    }

    private function getJoke():object
    {
        $endpoint = "https://api.api-ninjas.com/v1/dadjokes";
        $api_key = "Wyi27LYBZ4b8W7vfqgZ+Ww==yvK6t75Bj21Y4BCP";

        $response = Http::acceptJson()
            ->withHeaders(['X-API-KEY' => $api_key])
            ->get($endpoint);

        return json_decode($response->body())[0];
    }


}
