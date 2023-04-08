<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Siswa;
use App\Models\Pengumuman;
use App\Models\Admin;


class LandingpageController extends Controller
{
    public function landingpage()
    {
        $sekolah = Sekolah::all();
        $siswa = Siswa::all();
        $pengumuman = Pengumuman::all();
        $admin = Admin::where('isAdmin', 1)->first();
        return view('student.pages.landingpage', [
            'sekolah' => $sekolah,
            'siswa' => $siswa,
            'count_sekolah' => $sekolah->count(),
            'count_siswa' => $siswa->count(),
            'pengumumans' => $pengumuman,
            'admin' => $admin
        ]);
    }
}
