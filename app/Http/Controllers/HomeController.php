<?php

namespace App\Http\Controllers;

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
            if (Auth::user()->role == "partner" || Auth::user()->role == "admin") {
                return view('admin-controlls.admin-home');
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

    public function publicServices()
    {
        return view('general-views.public-services');
    }

    public function publicStores()
    {
        return view('general-views.public-stores');
    }

    public function getHelp()
    {
        return view('general-views.help');
    }
}
