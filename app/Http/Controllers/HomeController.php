<?php
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function __invoke()
//     {
//         return "Welcome to our website!";
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }
}
