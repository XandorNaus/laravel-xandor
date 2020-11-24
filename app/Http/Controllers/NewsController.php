<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return view(
            'news.index',
            [
                'products' => News::orderBy('datetime_active', 'DESC')->paginate(3)
            ]
        );
    }

    public function show($slug)
    {

        $product = News::where('slug', $slug)->first();

        if(!$product){
            abort(404);
        }

        return view('news.show', ['product' => $product]);
    }

}
