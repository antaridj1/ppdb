<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function editSekolah()
    {
        $sekolah = Auth::user();
        return view('profile.sekolah', compact('sekolah'));
    }

    public function updateSekolah(Request $request){
        $sekolah = Sekolah::find( Auth::id());

        if($request->file('gambar')){
            $image_path = $request->file('gambar')->store('image', 'public');
        } else {
            $image_path = $sekolah->gambar;
        }

        if($request->password){
            $request->validate([
                'nama_sekolah' => 'required',
                'tlp_sekolah' => 'required',
                'alamat_sekolah' => 'required',
                'kuota' => 'required|numeric|min:0',
                'email' => 'required|email',
                'password' => 'min:6'
            ]);
    
            $sekolah->update([
                'nama_sekolah' => $request->nama_sekolah,
                'tlp_sekolah' => $request->tlp_sekolah,
                'alamat_sekolah' => $request->alamat_sekolah,
                'email' => $request->email,
                'gambar' => $image_path,
                'kuota' => $request->kuota,
                'password' => $request->password
            ]);
        } else {
            $request->validate([
                'nama_sekolah' => 'required',
                'tlp_sekolah' => 'required',
                'alamat_sekolah' => 'required',
                'email' => 'required|email',
                'kuota' => 'required|numeric|min:0',
            ]);
    
            $sekolah->update([
                'nama_sekolah' => $request->nama_sekolah,
                'tlp_sekolah' => $request->tlp_sekolah,
                'alamat_sekolah' => $request->alamat_sekolah,
                'email' => $request->email,
                'kuota' => $request->kuota,
                'gambar' => $image_path,
            ]);
        }

        return redirect('sekolah/profile')
            ->with('status','success')
            ->with('message','Profil berhasil diedit');
    }

    public function editAdmin()
    {
        $admin = Auth::user();
        return view('profile.admin', compact('admin'));
    }

    public function updateAdmin(Request $request){
        $admin = Admin::find(Auth::id());

        if($request->file('gambar')){
            $image_path = $request->file('gambar')->store('image', 'public');
        } else {
            $image_path = $admin->gambar;
        }

        if($request->password){
            $request->validate([
                'nama_admin' => 'required',
                'tlp_admin' => 'required',
                'email' => 'required|email',
                'password' => 'min:6'
            ]);
    
            $admin->update([
                'nama_admin' => $request->nama_admin,
                'tlp_admin' => $request->tlp_admin,
                'email' => $request->email,
                'gambar' => $image_path,
                'password' => $request->password
            ]);
        } else {
            $request->validate([
                'nama_admin' => 'required',
                'tlp_admin' => 'required',
                'email' => 'required|email',
            ]);
    
            $admin->update([
                'nama_admin' => $request->nama_admin,
                'tlp_admin' => $request->tlp_admin,
                'email' => $request->email,
                'gambar' => $image_path,
            ]);
        }

        return redirect('admin/profile')
            ->with('status','success')
            ->with('message','Profil berhasil diedit');
    }
}
