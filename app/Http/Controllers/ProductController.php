<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $listProducts = Product::all();

        /* dd($listProducts); */

        return view('products.index',[
            'listProducts' => $listProducts
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function show($name)
    {
        return view('products.show', ['name' => $name]);
    }
}
