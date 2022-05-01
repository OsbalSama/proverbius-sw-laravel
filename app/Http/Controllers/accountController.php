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

    //Create & Store Product
    public function createProductService(User $User)
    {
        return view('account-views.product-views.new-product')->with([
            'User' => $User,
        ]);
    }

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
            'version' => request()->version,
            'download_link' => request()->downloadLink,
            'user_id' => Auth::User()->id,
        ]);
        return view('account-views.profile-created-products')->with([
            'User' => Auth::user(),
            'created' => true,
        ]);
    }


    // Edit & Update Products
    public function editProductService(product $Product)
    {
        if (($Product->user->isLogged())||(Auth::User()->role == 'admin')) {
            return view('account-views.product-views.edit-product')->with([
                'User' => Auth::User(),
                'Product' => $Product
            ]);
        }
        abort(403);
    }

    public function updateProductService(product $Product)
    {
        $rules = [
            'title' => ['required', 'string', 'max:255', 'min:4'],
            'description' => ['required', 'string', 'max:1000', 'min:4'],
        ];
        request()->validate($rules);
        $title  = request()->title;

        $Product->update([
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => request()->description,
            'type' => request()->type,
            'amount' => request()->amount,
            'stock' => request()->stock,
            'version' => request()->version,
            'download_link' => request()->downloadLink,
        ]);
        return redirect()->route('public.product.view', ['Product' => $Product]);
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
