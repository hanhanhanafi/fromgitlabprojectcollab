<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('operator.homepage');
    }
    public function guru()
    {
        return view('guru.index');

    }

}
