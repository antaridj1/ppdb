<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\DataPribadi;
use App\Models\Laporan;
use App\Models\Order;
use App\Models\Portfolio;
use App\Models\Sekolah;
use App\Models\Siswa;
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
            $jumlah_peserta = DataPribadi::count();
            $jumlah_wali = Siswa::count();
            $jumlah_sekolah = Sekolah::count();
            $peserta_didiks = DataPribadi::whereDate('created_at', Carbon::today())->get();
            return view('home', compact('jumlah_peserta', 'jumlah_wali','jumlah_sekolah', 'peserta_didiks'));
        } else {
            return view('home');
        }
    }

    public function landingPage(){
        return view('student.pages.landingpage');
    }
}
