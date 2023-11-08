<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\PromoController;
use App\Http\Controllers\user\WasotoController;
use App\Http\Controllers\admin\AlamatController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\TransaksiController;
use App\Http\Controllers\user\HomeController as UserHomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wasoto', [WasotoController::class, 'index'])->name('user.wasoto'); 

Auth::routes();

Route::get('/force/logout', function (Request $request) {
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:admin']], function () {

    // Home
    Route::controller(App\Http\Controllers\admin\HomeController::class)->group(function () {
        Route::get('/admin/home', 'index')->name('admin.home');
    });

    // Menu
    Route::controller(MenuController::class)->group(function () {
        Route::get('/admin/menu', 'index')->name('admin.menu');
        Route::get('/admin/menu/add', 'create')->name('admin.menu.add');
        Route::post('/admin/menu/store', 'store')->name('admin.menu.store');
    });

    // Category
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/category', 'index')->name('admin.category');
        Route::get('/admin/category/add', 'create')->name('admin.category.add');
        Route::post('/admin/category/post', 'store')->name('admin.category.store');
        Route::get('/admin/category/show/{id}', 'show')->name('admin.category.show');
    });

    // Promo
    Route::controller(PromoController::class)->group(function () {
        Route::get('/admin/promo', 'index')->name('admin.promo');
        Route::get('/admin/promo/add', 'create')->name('admin.promo.add');
        Route::post('/admin/promo/store', 'store')->name('admin.promo.store');
    });

    // Transaksi
    Route::controller(TransaksiController::class)->group(function () {
        Route::get('/admin/transaksi', 'index')->name('admin.transaksi');
        Route::get('/admin/transaksi/add', 'create')->name('admin.transaksi.add');
    });

    // Alamat
    Route::controller(AlamatController::class)->group(function () {
        Route::get('/admin/alamat', 'index')->name('admin.alamat');
        //Route::get('/admin/alamat/add', 'create')->name('admin.alamat.add');
        //Route::post('/admin/alamat/store', 'store')->name('admin.alamat.store');
    });
});

Route::group(['middleware' => ['role:user']], function () {
    Route::controller(App\Http\Controllers\user\HomeController::class)->group(function () {
        Route::get('/wasoto/home', 'index')->name('user.wasoto.home');
        Route::get('/wasoto/checkout/{id}', 'create')->name('user.wasoto.home.checkout');
    });

    Route::controller(AlamatController::class)->group(function () {
        Route::post('/wasoto/alamat', 'store')->name('user.alamat.wasoto.store');
    });

    Route::controller(TransaksiController::class)->group(function () {
        Route::post('/wasoto/trasaksi', 'store')->name('user.transaksi.wasoto.store');
    });
});
