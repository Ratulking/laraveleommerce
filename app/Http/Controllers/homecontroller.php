<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //
public function index()
    {
        $featuredProducts = [
            ['name' => 'Laptop Pro', 'price' => 1200],
            ['name' => 'Smart Phone X', 'price' => 650],
            ['name' => 'Wireless Headphone', 'price' => 180],
        ];

        $categories = ['Electronics', 'Fashion', 'Home', 'Sports'];

        return view('home.homepage', compact('featuredProducts', 'categories'));
    }
}
