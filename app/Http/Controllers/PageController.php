<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function route($any = "")
    {

        if($any == "") {
            abort(404);
        }

        $page = Page::where('slug', $any)->first();

        if(!isset($page->slug)) {
            abort(404);
        }

        return view('page.page', ["page" => $page]);

    }

}
