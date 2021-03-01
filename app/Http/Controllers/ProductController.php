  
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Product',
            'message' => 'Ini Halaman Product'
        ];
        return view('product', compact('data'));
    }
}