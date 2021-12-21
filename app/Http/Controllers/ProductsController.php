<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Welcome to Laravel 8";
        $desc = "Created by Branko";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];


        return view('products.index', [
            'data' => $data
        ]);
    }
}
