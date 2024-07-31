<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
])->where('slug', 'home-page');;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/{slug}', [
    PagesController::class, 'getPage'
])->where('slug', '([A-Za-z0-9\-\/]+)');
