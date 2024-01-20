<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Quotes extends Component
{
    public array $categories = array("art", "attitude", "success");
    public string $cat = "art";

    public function render()
    {
        $quote = $this->getQuote();
        $categories = $this->categories;
        $cat = $this->cat;

        return view('livewire.quotes', compact( 'quote', 'categories', 'cat'));
    }
    public function selectCategory($category)
    {
        $this->cat = $category;
    }
    private function getQuote():object
    {
        $cat = $this->cat;
        $endpoint = "https://api.api-ninjas.com/v1/quotes?category={$cat}";
        $api_key = "Wyi27LYBZ4b8W7vfqgZ+Ww==yvK6t75Bj21Y4BCP";

        $response = Http::acceptJson()
            ->withHeaders(['X-API-KEY' => $api_key])
            ->get($endpoint);

        return json_decode($response->body())[0];
    }
}
