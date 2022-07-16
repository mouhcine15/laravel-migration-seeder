<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $train = \App\Train::all();
        return view('home', compact('train'));
    }
}
