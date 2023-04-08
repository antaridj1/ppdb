<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function editUser()
    {
        $user = Auth::user();
        return view('profile-user', compact('user'));
    }

    public function updateUser(Request $request){
        
        if($request->password){
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'min:8',
                'phone_number' => 'required',
            ]);
            User::where('id', Auth::id())->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone_number' => $request->phone_number
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone_number' => 'required'
            ]);
            User::where('id', Auth::id())->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number
            ]);
        }

        return redirect('profile-user')
            ->with('status','success')
            ->with('message','Profil berhasil diedit');
    }
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

        if($request->file('file_persyaratan')){
            $file_path = $request->file('file_persyaratan')->store('file', 'public');
        } else {
            $file_path = $sekolah->file_persyaratan;
        }

        if($request->password){
            $request->validate([
                'nama_sekolah' => 'required',
                'tlp_sekolah' => 'required',
                'alamat_sekolah' => 'required',
                'email' => 'required|email',
                'password' => 'min:6'
            ]);
    
            $sekolah->update([
                'nama_sekolah' => $request->nama_sekolah,
                'tlp_sekolah' => $request->tlp_sekolah,
                'alamat_sekolah' => $request->alamat_sekolah,
                'email' => $request->email,
                'gambar' => $image_path,
                'file_pendaftaran' => $file_path,
                'password' => $request->password
            ]);
        } else {
            $request->validate([
                'nama_sekolah' => 'required',
                'tlp_sekolah' => 'required',
                'alamat_sekolah' => 'required',
                'email' => 'required|email',
            ]);
    
            $sekolah->update([
                'nama_sekolah' => $request->nama_sekolah,
                'tlp_sekolah' => $request->tlp_sekolah,
                'alamat_sekolah' => $request->alamat_sekolah,
                'email' => $request->email,
                'gambar' => $image_path,
                'file_pendaftaran' => $file_path,
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
