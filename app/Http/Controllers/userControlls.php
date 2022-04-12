<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class userControlls extends Controller
{
    public function __construct()
    {
        $this->middleware('is.admin');
    }

    public function accountProducts(User $User)
    {   
        return view('account-views.my-products')->with([
            'User' => $User
        ]);
    }
}
