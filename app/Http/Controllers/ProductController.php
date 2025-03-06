<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        echo "Hola desde el controlador create";
    }

    public function show($name)
    {
        echo "Hola desde el controlador show";
    }
}
