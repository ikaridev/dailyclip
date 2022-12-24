<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

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


Route::controller(VideoController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/random', 'randomClip');
    Route::get('/clip/{video}', 'showClip');
});

Route::controller(AdminController::class)->prefix('/admin')->group(function(){
    Route::get('/refresh', 'update');
});
/*

Route::get('/', function () {
    return view('welcome');
});

*/
