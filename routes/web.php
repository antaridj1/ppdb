<?php

use App\Http\Controllers\ArchitectController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderUserController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\StyleInteriorController;
use App\Http\Controllers\TypeInteriorController;
use App\Http\Controllers\UserController;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'landingPage']);

Route::middleware('auth:web')->group(function () {
    Route::get('profile-user', [ProfileController::class, 'editUser'])->name('profile.editUser');
    Route::patch('profile-user', [ProfileController::class, 'updateUser'])->name('profile.updateUser');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'showAdminLoginForm'])->name('getLogin');
    Route::post('login', [LoginController::class, 'adminLogin'])->name('login');

    Route::middleware('auth:admin')->group(function(){
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::get('profile', [ProfileController::class, 'editAdmin'])->name('profile.editAdmin');
        Route::patch('profile', [ProfileController::class, 'updateAdmin'])->name('profile.updateAdmin');

        Route::group(['prefix' => 'operator', 'as' => 'operator.'], function () {
            Route::resource('/', OperatorController::class)->parameters([
                '' => 'operator'
            ]);
            Route::patch('/{operator}/update-status', [OperatorController::class, 'update_status'])->name('updateStatus');
        });

        Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
            Route::resource('/', UserController::class)->parameters([
                '' => 'user'
            ]);
            Route::patch('/{user}/update-status', [UserController::class, 'update_status'])->name('updateStatus');
        });

        Route::group(['prefix' => 'chat', 'as' => 'chat.'], function () {
            Route::get('/', [ChatController::class, 'index'])->name('index');
            Route::get('create/{user}', [ChatController::class, 'create'])->name('create');
            Route::post('store/{user}', [ChatController::class, 'store'])->name('store');
        });

        Route::post('logout', [LogoutController::class, 'adminLogout'])->name('logout');
    });
});

Route::prefix('ppdb')->group(function () {
    Route::get('/', function () {
        return view('student.pages.landingpage');
    });

    // Get the SDN id
    $url_sdn_id = null;
    $current_url = URL::current();
    $path_segments = explode('/', parse_url($current_url, PHP_URL_PATH));
    if(count($path_segments) > 3) {
        $url_sdn_id = $path_segments[3];
    }

    Route::group(['prefix' => 'sdn/'.$url_sdn_id], function () use ($url_sdn_id) {
        Route::get('/', function() use ($url_sdn_id){
            $data = Sekolah::where('id', $url_sdn_id )->first();
            return view('student.pages.landing-sdn', ['data' => $data]);
        });

        // Route::get('/login', [LoginController::class, 'showLoginForm'])->name('getLogin');
        Route::get('login', function() use ($url_sdn_id) {
            return view('student.pages.login', ['id'=> $url_sdn_id]);
        })->name('login.form.siswa');
        Route::post('login', [LoginController::class, 'siswaLogin'])->name('login.siswa');
        // Route::post('/login', [LoginController::class, 'login'])->name('login');

        Route::get('/register', function() use ($url_sdn_id) {
            return view('student.pages.register', ['id'=> $url_sdn_id]);
        });
        // Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('getRegister');
        Route::post('/register', [RegisterController::class, 'registerSiswa'])->name('register.siswa');
        // Route::post('/register', [RegisterController::class, 'register'])->name('register');

        Route::middleware('auth:siswa')->group(function(){
        // Route::middleware('auth:web')->group(function(){
            Route::get('/dashboard', function(){
                return view('student.pages.dashboard');
            })->name('dashboard.siswa');
            Route::get('/data-peserta-didik', function(){
                return view('student.pages.data-ppdb');
            })->name('data.siswa');
            Route::get('/profile', function(){
                return view('student.pages.profile-siswa-ppdb');
            })->name('profile.siswa');
            Route::get('/pesan', function(){
                return view('student.pages.chat');
            });

            Route::post('logout', [LogoutController::class, 'siswaLogout'])->name('logout.siswa');

        });
    });


    Route::get('/{sd}', [LandingPageSchool::class, 'landingPage']);

});
