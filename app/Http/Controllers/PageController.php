<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Welcome Nazril!";
    }

    public function about()
    {
        return "Name: Muhammad Nazril Nur Rahman    <br> NIM: 2341760174";
    }

    public function articles($id)
    {
        return "Article Page with ID: " . $id;
    }
}
