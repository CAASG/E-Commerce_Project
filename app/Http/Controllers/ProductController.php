<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $listProducts = Product::paginate();

        /* dd($listProducts); */

        return view('products.index',[
            'listProducts' => $listProducts
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show', ['product' => $product]);
    }
}
