<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        User::create(request()->all());
        return redirect()->route('admin.accounts.all')->with('create' . 'ok');
        //return redirect()->back();
        //return redirect()->action('teacherController@createTeacher');        
        //return redirect('https://www.youtube.com');
    }

    public function delete(User $User)
    {
        $User->delete();
        return redirect()->route('admin.accounts.all')->with('delete' . 'ok');
    }

    public function viewProfile(User $User)
    {
        return view('account-views.profile')->with([
            'User' => $User
        ]);
    }
}
