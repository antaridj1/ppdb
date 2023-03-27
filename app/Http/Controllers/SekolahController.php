<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function landingPageSekolah()
    {
        $data = Sekolah::where('id', request('id'))->get();

        return view('student.pages.landing-sdn', $data);
    }

    public function index(){
        $sekolahs = Sekolah::all();

        return view('sekolah.index', compact('sekolahs'));
    }
}
