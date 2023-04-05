<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:siswa')->except('logout');
        $this->middleware('guest:sekolah')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('auth.admin.login');
    }

    public function showSiswaLoginForm()
    {
        return view('student.pages.login');
    }

    public function showSekolahLoginForm()
    {
        return view('auth.sekolah.login');
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('admin')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/admin/home');
        } else {
            return back()
                ->with('status', 'error')
                ->with('message', 'Wrong email or password');
        }
    }

    public function sekolahLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('sekolah')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/sekolah/home');
        } else {
            return back()
                ->with('status', 'error')
                ->with('message', 'Wrong email or password');
        }
    }

    public function siswaLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('siswa')->attempt([
            'email' => $request->email,
            'password' => $request->password,
            'sekolah_id' => $request->id
            ]
        )){
            return redirect('ppdb/sdn/' .$request->id. '/dashboard');
        } else {
            return redirect()->back()->with('error', 'Email atau password Anda salah');
        }
    }

}
