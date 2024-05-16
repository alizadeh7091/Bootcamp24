<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function homePage()
    {
        $all_contents = Content::paginate(4);
        return view('home.home', compact('all_contents'));
        // dd('hi');
    }
}
