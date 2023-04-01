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
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\StyleInteriorController;
use App\Http\Controllers\TypeInteriorController;
use App\Http\Controllers\UserController;
use App\Models\Sekolah;
use App\Models\Siswa;
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

    Route::middleware(['auth:admin','auth:sekolah'])->group(function(){
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::get('profile', [ProfileController::class, 'editAdmin'])->name('profile.editAdmin');
        Route::patch('profile', [ProfileController::class, 'updateAdmin'])->name('profile.updateAdmin');

        Route::group(['prefix' => 'sekolah', 'as' => 'sekolah.'], function () {
            Route::resource('/', SekolahController::class)->parameters([
                '' => 'sekolah'
            ]);
            Route::patch('/{sekolah}/update-status', [SekolahController::class, 'update_status'])->name('updateStatus');
        });

        Route::group(['prefix' => 'chat', 'as' => 'chat.'], function () {
            Route::get('/', [ChatController::class, 'index'])->name('index');
            Route::get('create/{user}', [ChatController::class, 'create'])->name('create');
            Route::post('store/{user}', [ChatController::class, 'store'])->name('store');
        });

        Route::group(['prefix' => 'siswa', 'as' => 'siswa.'], function () {
            Route::resource('/', SiswaController::class)->parameters([
                '' => 'siswa'
            ]);
            Route::patch('/{siswa}/update-status', [SiswaController::class, 'update_status'])->name('updateStatus');
        });

        Route::post('logout', [LogoutController::class, 'adminLogout'])->name('logout');
    });
});

Route::prefix('ppdb')->group(function () {
    Route::get('/', function () {
        return view('student.pages.landingpage');
    })->name('ppdb');

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
            $total_daftar = Siswa::where('sekolah_id', $url_sdn_id)->count();
            return view('student.pages.landing-sdn', ['data' => $data, 'total' => $total_daftar]);
        });

        Route::get('login', function() use ($url_sdn_id) {
            if(auth()->guard('siswa')->check()){
                $siswa = Siswa::find(auth()->guard('siswa')->check());
                return view('student.pages.dashboard', ['siswa' => $siswa]);
            }
            return view('student.pages.login', ['id'=> $url_sdn_id]);
        })->name('login.form.siswa');
        Route::post('login', [LoginController::class, 'siswaLogin'])->name('login.siswa');

        Route::get('/register', function() use ($url_sdn_id) {
            return view('student.pages.register', ['id'=> $url_sdn_id]);
        })->name("register.form.siswa");
        Route::post('/register', [RegisterController::class, 'registerSiswa'])->name('register.siswa');

        Route::middleware('auth:siswa')->group(function(){
            Route::name('siswa.')->group(function(){
                Route::get('/dashboard', [SiswaController::class, 'dashboard'])->name('dashboard');

                Route::get('/data-peserta-didik', [SiswaController::class, 'index'])->name('data');
                Route::post('/data-peserta-didik', [SiswaController::class, 'store'])->name('store');

                Route::get('/profile', [SiswaController::class, 'show'])->name('profile');
                Route::post('/profile', [SiswaController::class, 'update'])->name('update');

                Route::get('/chat', [ChatController::class, 'indexUser'])->name('indexUser');
                Route::get('/chat/create', [ChatController::class, 'createUser'])->name('createUser');
                Route::post('/chat/create', [ChatController::class, 'storeUser'])->name('storeUser');

                Route::post('logout', [LogoutController::class, 'siswaLogout'])->name('logout');
            });
        });
    });
});
