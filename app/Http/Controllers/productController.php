<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $products = product::all();        
        return view('admin-controlls.product_service-controlls.all-products')->with([
            'products' => $products
        ]);
    }


    public function viewProductPage(Product $product)
    {
        return view('account-views.view-product')->with([
            'product' => $product
        ]);
    }
}
