<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Movie;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }
}
