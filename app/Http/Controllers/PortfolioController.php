<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function portfolio()
    {
        return view("portfolio");
    }

    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view("contact");
    }

    public function formContact(Request $request)
    {
        return view("contact", ["data" => $request]);
    }
}
