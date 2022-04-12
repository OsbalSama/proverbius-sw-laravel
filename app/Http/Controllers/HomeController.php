<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
        if (Auth::check()) {                        
            if (Auth::user()->role == "admin") {
                return view('admin-controlls.admin-home');
            } else if(Auth::user()->role == "partner"){
                return view('partner-controlls.partner-home');
            } else {
                return view('home');
            }            
        } else {
            return view('home');
        }
    }

    public function topProdsServs()
    {
        return view('general-views.top-prod-serv');
    }

    public function topPartners()
    {
        return view('general-views.top-partners');
    }

    public function bestShops()
    {
        return view('general-views.best-shops');
    }

    public function Technologies()
    {
        return view('general-views.technologies');
    }

    public function movileApps()
    {
        return view('general-views.movile-apps');
    }

    public function webServices()
    {
        return view('general-views.web-services');
    }

    public function Industry()
    {
        return view('general-views.industry');
    }

    public function Restaurants()
    {
        return view('general-views.restaurants');
    }

    public function Sightseeing()
    {
        return view('general-views.sightseeing');
    }

    public function ECommerce()
    {
        return view('general-views.e-commerce');
    }

    public function otherCats()
    {
        return view('general-views.other-cats');
    }

    public function publicProducts()
    {
        return view('general-views.public-products');
    }

    // public function publicServices()
    // {
    //     return view('general-views.public-services');
    // }

    public function aboutUs()
    {
        return view('general-views.about-us');
    }

    public function JoinUsInfo()
    {
        return view('general-views.join-us');
    }

    public function clientHistory()
    {
        return view('general-views.history');
    }

    public function getHelp()
    {
        return view('general-views.help');
    }
    
    public function viewProductPage(product $product)
    {
        return view('account-views.view-product')->with([
            'product' => $product
        ]);
    }

    public function viewProfile(User $User)
    {
        return view('account-views.profile')->with([
            'User' => $User
        ]);
    }

    public function accountProducts(User $User)
    {   
        return view('account-views.my-products')->with([
            'User' => $User
        ]);
    }
}
