<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home(){
        return view('pages.index');
    }
    function about(){
        return view('pages.about');
    }
}
