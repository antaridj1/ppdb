<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function landingPageSekolah()
    {
        // $data = Sekolah::where('id', 1)->get();

        return view('student.pages.landing-sdn');
    }
}
