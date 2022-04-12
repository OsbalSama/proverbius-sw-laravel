<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{

    public function __construct()
    {
        $this->middleware('is.admin');
    }


    public function index()
    {
        $products = product::all();        
        return view('admin-controlls.product_service-controlls.all-products')->with([
            'products' => $products
        ]);
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.all')->with('deleted', 'ok');
    }

    
}
