<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\FavoriteController;

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

//ゲストの操作
Route::group(['middleware'=>['guest']],function(){
    //ログインフォーム表示
    Route::get('/login', [AuthController::class,'showlogin'])->name('showlogin');
    //ログイン処理
    Route::post('/login', [AuthController::class,'login'])->name('login');
});

//登録ユーザーの操作
Route::group(['middleware'=>['auth']],function(){
    //ユーザーのマイページを表示
    Route::get('/mypage', [AuthController::class,'mypage'])->name('mypage');
    //ログアウト
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');

    // お気に入りボタンon off
    Route::get('/fav_on/{store}', [FavoriteController::class,'fav_on'])->name('fav_on');
    Route::get('/fav_off/{store}', [FavoriteController::class,'fav_off'])->name('fav_off');
    Route::post('/', [FavoriteController::class, 'favorite'])->name('favorite');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/', [StoreController::class, 'index'])->name('home');


Route::get('/done', function () {
    return view('done');
});