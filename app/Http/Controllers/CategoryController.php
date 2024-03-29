<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();
        $categories = $categories->load('posts.media', 'posts.categories', 'posts.author');

        return view('site.categories.index', [
            'categories' => $categories,
        ]);
    }

    public function show(string $id)
    {
        $category = \App\Models\Category::findOrFail($id);
        $category = $category->load('posts.media', 'posts.categories', 'posts.author');

        return view('site.categories.show', [
            'category' => $category,
        ]);
    }
}
