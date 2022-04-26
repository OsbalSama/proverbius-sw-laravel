<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class adminControlls extends Controller
{
    public function __construct()
    {
        $this->middleware('only.admin');
    }

    public function index()
    {
        return view('admin-controlls.admin-home');
    }

    public function allAccounts()
    {
        $users = User::all();
        return view('admin-controlls.account-controlls.all-accounts')->with([
            'users' => $users
        ]);
    }

    public function createUser()
    {
        return view('admin-controlls.account-controlls.create-account');
    }

    public function storeUser()
    {
        $rules = [
            'name' => ['required', 'string', 'max:255', 'unique:users', 'min:4' . request()->name],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5'],
        ];
        request()->validate($rules);
        $name  = request()->name;
        User::create([
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'email' => request()->email,
            'password' => Hash::make(request()->password),
        ]);
        return redirect()->route('admin.accounts.all')->with('created', 'ok');
    }

    public function editUser(User $User)
    {
        return view('admin-controlls.account-controlls.edit-account')->with([
            'User' => $User,
        ]);
    }

    public function updateUser(User $User)
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
            'role' => request()->role,
            'visible' => request()->visible,
            'locked' => request()->locked,
        ]);
        return redirect()->route('admin.accounts.all')->with('update', 'ok');
    }

    public function deleteUser(User $User)
    {
        $User->delete();
        return redirect()->route('admin.accounts.all')->with('deleted', 'ok');
    }
}
