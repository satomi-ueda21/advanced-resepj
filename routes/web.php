<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\MypageController;

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
    Route::get('/mypage/{id}', [MypageController::class,'index'])->name('mypage');
    //ログアウト
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');

    // お気に入りボタンon off
    Route::get('/fav_on/{store}', [FavoriteController::class,'fav_on'])->name('fav_on');
    Route::get('/fav_off/{store}', [FavoriteController::class,'fav_off'])->name('fav_off');
    // Route::post('/', [FavoriteController::class, 'favorite'])->name('favorite');

    //お店の予約
    Route::post('/detail/{id}', [DetailController::class, 'reservation'])->name('reservation');
    //お店の予約キャンセル
    Route::delete('mypage/{id}',[MypageController::class,'reserve_delete'])->name('reserve_delete');
});

//ホームページ
Route::get('/', [StoreController::class, 'index'])->name('home');
//お店の詳細ページ
Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');

Route::get('/done', function () {
    return view('done');
})->name('done');