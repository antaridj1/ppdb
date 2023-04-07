<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function adminLogout(Request $request){

        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function sekolahLogout(Request $request){

        Auth::guard('sekolah')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/sekolah/login');
    }

    public function siswaLogout(Request $request){

        Auth::guard('siswa')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('ppdb');
    }
}
