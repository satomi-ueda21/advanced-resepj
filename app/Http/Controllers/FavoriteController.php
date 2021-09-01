<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    //お気に入りに追加
    public function fav_on(Store $store, Request $request)
    {
        $fav = New Favorite();
        $fav->store_id = $store->id;
        $fav->user_id = Auth::user()->id;
        $fav->save();
        return back();
    }

    //お気に入りを削除
    public function fav_off(Store $store, Request $request)
    {
        $user=Auth::user()->id;
        $fav=Favorite::where('store_id',$store->id)->where('user_id',$user)->first();
        $fav->delete();
        return back();
    }

}