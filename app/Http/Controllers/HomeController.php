<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'message' => 'Ini Halaman Home'
        ];
        return view('home', compact('data'));
    }
}