<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Laporan;
use App\Models\Order;
use App\Models\Portfolio;
use App\Models\TypeInterior;
use Carbon\Carbon;
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
        if(roleController('admin')){
            return view('home');
        } else {
            return view('home');
        }
    }

    public function landingPage(){
        return view('landing-page');
    }
}
