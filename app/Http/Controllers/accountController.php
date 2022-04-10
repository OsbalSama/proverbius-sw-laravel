<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class accountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('admin-controlls.account-controlls.all-accounts')->with([
            'users' => $users
        ]);
        // return view('admin-controlls.account-controlls.all-accounts');
    }

    public function create()
    {

        return view('admin-controlls.account-controlls.create-account');
    }

    public function store()
    {
        $rules = [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ];
        request()->validate($rules);
        User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
        ]);
        return redirect()->route('admin.accounts.all')->with('created', 'ok');
        //return redirect()->back();
        //return redirect()->action('teacherController@createTeacher');        
        //return redirect('https://www.youtube.com');
    }

    public function delete(User $User)
    {
        $User->delete();
        return redirect()->route('admin.accounts.all')->with('deleted', 'ok');
    }

    public function viewProfile(User $User)
    {
        return view('account-views.profile')->with([
            'User' => $User
        ]);
    }
}
