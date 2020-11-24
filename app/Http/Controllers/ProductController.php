<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view(

            'product.index',

            [
                'products' =>
                Product::inStockAndActive()->orderBy('id', 'DESC')->paginate(3)
            ]

        );
    }


    public function show($slug)
    {

        $product = Product::inStockAndActive()->where('slug', $slug)->first();

        if(!$product){
            abort(404);
        }

        return view('product.show', ['product' => $product]);
    }

}


