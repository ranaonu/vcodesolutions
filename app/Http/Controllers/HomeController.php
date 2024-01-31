<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use Mail; 
use App\Models\Portfolio;
use App\Models\SubServices;
use App\Models\Services;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $active_menu = 'home';
        $category_products = SubServices::take(4)->get()->toArray();
        return view('welcome',compact('active_menu','category_products'));
    }


    public function aboutus(Request $request)
    {        
        $active_menu = 'about';
        return view('about',compact('active_menu'));         
    }

    public function contactUs(Request $request)
    {   
        $active_menu = 'contact';
        return view('contact',compact('active_menu'));         
    }

    public function services(Request $request)
    {   
        $active_menu = 'services';
        return view('services',compact('active_menu'));         
    }

    public function news(Request $request)
    {   
        $active_menu = 'news';
        return view('news',compact('active_menu'));         
    }

}
