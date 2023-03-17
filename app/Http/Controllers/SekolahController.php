<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function landingPageSekolah()
    {
        Sekolah::where('id', request('id'))->get();
    }
}
