<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::create([
            'name' => 'Platinum 1',
            'price' => 10
        ]);

        // FOR INSTRUCTIONAL PURPOSES ONLY
        dd($product);
    }
}
