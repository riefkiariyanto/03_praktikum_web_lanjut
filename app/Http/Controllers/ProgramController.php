  
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Program',
            'message' => 'Ini Halaman Program'
        ];
        return view('program', compact('data'));
    }
}