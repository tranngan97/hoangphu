<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\TestsController;
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
    Route::get('test/delete/{slug}', [
        TestsController::class, 'delete'
    ]);
});


Route::get('/{slug}', [
    PagesController::class, 'getPage'
])->where('slug', '([A-Za-z0-9\-\/]+)');
