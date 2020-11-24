<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view(
            'welcome',
            [
                'news' => News::orderBy('datetime_active', 'DESC')->limit(3)->get(),
                'products' => Product::inStockAndActive()->orderBy('id', 'DESC')->limit(3)->get(),
            ]
        );

    }

    public function show($slug)
    {

        $product = Product::inStockAndActive()->where('slug', $slug)->first();

        if (!$product) {
            abort(404);
        }

        return view('welcome', ['product' => $product]);
    }
}




