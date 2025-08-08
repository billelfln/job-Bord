<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    //
    public function index(): View
    {
        return view("index");
    }

    public function about(): View
    {
        return view("about", ["pageTitle" => "About Page"]);
    }

    public function contact(): View
    {
        return view("contact", ["pageTitle" => "Contact Page"]);
    }
}
