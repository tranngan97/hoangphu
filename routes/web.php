<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
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
Route::get('/', [
    PagesController::class, 'getPage'
])->where('slug', 'home-page');

Route::get('/bai-thi', [
    TestsController::class, 'index'
]);
Route::get('/bai-thi/{slug}', [
    TestsController::class, 'view'
]);
Route::get('/dang-nhap', [
    LoginController::class, 'index'
]);
Route::get('/dang-xuat', [
    LoginController::class, 'logout'
]);
Route::post('/account/login/login', [
    LoginController::class, 'login'
]);
Route::post('/account/login/register', [
    LoginController::class, 'register'
]);
Route::get('/tai-khoan', [
    AccountController::class, 'index'
]);
Route::post('/account/edit/{id}', [
    AccountController::class, 'edit'
]);
Route::post('/save/test/account', [
    AccountController::class, 'saveTestResult'
]);
Route::get('/lich-su-bai-thi', [
    AccountController::class, 'testHistory'
]);
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('banners', function(){
        return view('admin_banner');
    });
    Route::get('banner/create', function(){
        return view('admin_banner_create');
    });
    Route::post('banner/save', [
        BannersController::class, 'save'
    ]);
    Route::get('banner/delete/{slug}', [
        BannersController::class, 'delete'
    ]);
    Route::get('tests', function(){
        return view('admin_test');
    });
    Route::get('test/create', function(){
        return view('admin_test_create');
    });
    Route::post('test/save', [
        TestsController::class, 'save'
    ]);
    Route::post('test/save/{id}', [
        TestsController::class, 'save'
    ]);
    Route::get('test/delete/{id}', [
        TestsController::class, 'delete'
    ]);
    Route::get('test/edit/{id}', [
        TestsController::class, 'edit'
    ]);
});


Route::get('/{slug}', [
    PagesController::class, 'getPage'
])->where('slug', '([A-Za-z0-9\-\/]+)');
