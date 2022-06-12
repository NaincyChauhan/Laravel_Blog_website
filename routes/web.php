<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// procted
Route::get('/index',[IndexController::class,'index'])->name('index')->middleware('guard');
Route::get('/group',[IndexController::class,'GroupDetails'])->name('group')->middleware('guard');
Route::get('/profile',[IndexController::class,'YourProfile'])->name('profile')->middleware('mygroudMiddleware');
Route::get('/no-access',function(){
    echo "You are not to aaccess the page";
    die;
});

Route::get('/logout',function(){
    session()->forget('user_id');
    echo "now you are logout";
});
