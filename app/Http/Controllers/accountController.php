<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class accountController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin-controlls.account-controlls.all-accounts')->with([
            'users' => $users
        ]);
        return view('admin-controlls.account-controlls.all-accounts');
    }
}
