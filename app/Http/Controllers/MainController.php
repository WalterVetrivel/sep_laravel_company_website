<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function portfolio() {
        return view('portfolio');
    }

    public function blogs() {
        return view('blogs');
    }

    public function post() {
        return view('post');
    }
}
