<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:siswa');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'no_hp' => ['nullable', 'string', 'min:8','max:255'],
            'no_tlp' => ['nullable', 'string', 'min:8','max:255'],
            'id' => ['required']
        ]);
    }

    protected function create(array $data, $id)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'no_tlp' => $data['no_tlp'],
            'no_hp' => $data['no_hp'],
            'sekolah_id' => $id
        ]);
    }

    protected function registerSiswa(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email|max:255|unique:siswa,email',
            'password' => 'required|string|min:8|confirmed',
            'no_hp' => 'nullable|string|min:8','max:255',
            'no_tlp' => 'nullable|string|min:8','max:255',
            'sekolah_id' => 'required'
        ]);

        $dataSiswa = Siswa::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'no_tlp' => $request->no_tlp,
            'sekolah_id' => $request->sekolah_id,
        ]);

        return redirect()->route('login.siswa')
            ->with('status', 'success')
            ->with('message', 'Registrasi berhasil, silahkan melakukan login');
    }



}
