<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Menampilkan halaman dashboard
    public function index()
    {
        return view ('dashboard');
    }

    // Menampilkan halaman welcome
    public function welcome()
    {
        return view('welcome');
    }
}
