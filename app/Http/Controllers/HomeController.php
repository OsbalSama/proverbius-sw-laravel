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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function topProdsServs()
    {
        return view('general-views.top-prod-serv');
    }

    public function topPartners()
    {
        return view('general-views.top-partners');
    }

    public function ourPartners()
    {
        return view('general-views.our-partners');
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

    public function business()
    {
        return view('general-views.business');
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
        $products = product::all();
        return view('general-views.public-products')->with([
            'products' => $products
        ]);
    }

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

    public function viewProductPage(product $Product)
    {
        $User = User::findOrFail($Product->user_id);
        return view('account-views.view-product')->with([
            'Product' => $Product,
            'User' => $User
        ]);
    }

    public function accountProfile(User $User)
    {
        return view('account-views.profile')->with([
            'User' => $User
        ]);
    }


    public function accountInfo(User $User)
    {
        return view('account-views.profile-info')->with([
            'User' => $User,
            'update' => false,
        ]);
    }

    public function accountLikes(User $User)
    {
        return view('account-views.profile-liked-items')->with([
            'User' => $User
        ]);
    }

    public function accountSuscriptions(User $User)
    {
        return view('account-views.profile-suscriptions')->with([
            'User' => $User
        ]);
    }


    public function accountProducts(User $User)
    {
        return view('account-views.profile-created-products')->with([
            'User' => $User,
            'created' => false,
        ]);
    }
}
