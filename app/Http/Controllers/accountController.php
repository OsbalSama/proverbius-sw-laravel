<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
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

    public function createProductService(User $User)
    {
        return view('account-views.profile-new-product')->with([
            'User' => $User
        ]);
    }

    public function storeProductService(User $User, product $Product)
    {
        // $rules = [
        //     'name' => ['required', 'string', 'max:255', 'unique:users', 'min:4' . request()->name],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:5'],
        // ];
        // request()->validate($rules);
        $title  = request()->title;
        product::create([
            'name' => $title,
            'slug' => Str::slug($title, '-'),
            'email' => request()->email,
            'password' => Hash::make(request()->password),
        ]);
        return redirect()->route('admin.accounts.all')->with('created', 'ok');
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
