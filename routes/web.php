<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Auth\Events\Logout;

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
//ユーザー登録
Route::get('/register', [AuthController::class,'showregister'])->name('showregister');
Route::post('/register', [AuthController::class,'register'])->name('register');

Route::get('/thanks', [AuthController::class,'thanks'])->name('thanks');


Route::group(['middleware'=>['guest']],function(){
    //ログインフォーム表示
    Route::get('/login', [AuthController::class,'showLogin'])->name('showLogin');
    //ログイン処理
    Route::post('/login', [AuthController::class,'login'])->name('login');
});

Route::group(['middleware'=>['auth']],function(){
    //ユーザーのマイページを表示
    Route::get('/mypage', function () {
        return view('mypage');
    })->name('mypage');
    //ログアウト
    Route::post('logout',
    [AuthController::class,'logout'])->name('logout');
});


Route::get('/detail', function () {
    return view('detail');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/done', function () {
    return view('done');
});