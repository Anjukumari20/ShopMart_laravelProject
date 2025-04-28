<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $featuredProducts = \App\Models\Product::where('is_featured', true)
            ->where('is_active', true)
            ->take(8)
            ->get();

        $categories = \App\Models\Category::where('is_active', true)->get();

        return view('home', compact('featuredProducts', 'categories'));
    }
}
