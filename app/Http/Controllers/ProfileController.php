<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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

    public function editAdmin()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function updateAdmin(Request $request){
        
        if($request->password){
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'min:8',
                'phone_number' => 'required',
            ]);
            Admin::where('id', Auth::id())->update([
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
            Admin::where('id', Auth::id())->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number
            ]);
        }

        return redirect('admin/profile')
            ->with('status','success')
            ->with('message','Profil berhasil diedit');
    }
}
