<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class accountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    //Create Product
    public function createProductService(User $User)
    {
        return view('account-views.profile-new-product')->with([
            'User' => $User,
        ]);
    }

    //Store Product
    public function storeProductService()
    {
        $rules = [
            'title' => ['required', 'string', 'max:255', 'unique:products', 'min:4'],
            'description' => ['required', 'string', 'max:1000', 'min:4'],
        ];
        request()->validate($rules);
        $title  = request()->title;
        product::create([
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => request()->description,
            'type' => request()->type,
            'amount' => request()->amount,
            'stock' => request()->stock,
            'visible' => request()->visible,
            'locked' => request()->locked,
            'user_id' => Auth::User()->id,
        ]);
        return view('account-views.profile-created-products')->with([
            'User' => Auth::user(),
            'created' => true,
        ]);
    }

    public function editAccountInfo(User $User)
    {
        if ($User->isLogged() || (Auth::User()->role == 'admin')) {
            return view('account-views.profile-info-edit')->with([
                'User' => $User
            ]);
        }
        abort(403);
    }

    public function updateAccountInfo(User $User)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ];
        request()->validate($rules);
        $name  = request()->name;
        $User->update([
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'email' => request()->email,
            'first_names' => request()->first_names,
            'last_names' => request()->last_names,
            'birthdate' => request()->birthdate,
            'address' => request()->address,
        ]);
        return view('account-views.profile-info')->with([
            'User' => $User,
            'update' => true,
        ]);
    }
}
