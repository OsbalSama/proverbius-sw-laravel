<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeController extends Controller
{
    public function index()
    {
        return view('admin-controlls.store-controlls.all-stores');
    }
}
