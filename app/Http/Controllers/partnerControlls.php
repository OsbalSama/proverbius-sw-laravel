<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class partnerControlls extends Controller
{
    public function __construct()
    {
        $this->middleware('only.partners');
    }


    public function index()
    {
        return view('partner-controlls.partner-home');
    }
}
