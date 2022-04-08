<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class publicController extends Controller
{
    public function viewProfile(User $User)
    {
        return view('account-views.profile')->with([
            'User' => $User
        ]);
    }
}
