<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/**
 * storesテーブルからデータを取得。ホーム画面表示
 *  @return View
 */
class StoreController extends Controller
{
    public function index(Store $store)
    {
        $items = Store::all();
        $fav_model = new Favorite;
        return view('home',['items'=>$items,'fav_model'=>$fav_model]);
    }

}
