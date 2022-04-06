<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        return view('admin-controlls.product_service-controlls.all-products');
    }
}
