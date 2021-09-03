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
    public function index(Store $store,Request $request)
    {
        //ストア情報と検索結果表示用
        $query = Store::query();

        $area = $request->input('area');
        $genre = $request->input('genre');
        $keyword = $request->input('keyword');

        if(!empty($area) && $area!=='All area'){
            $query->where('area_id',$area);
        }

        if(!empty($genre && $genre!=='All genre')){
            $query->where('genre_id',$genre);
        }

        if(!empty($keyword)){
            $query->where('name','like','%'.$keyword.'%');
        }
        $items = $query->get();

        //お気に入り表示用
        $favorites = array();
        $favorites[0] = 'dummy';
        $user = Auth::id();

        foreach($items as $item)
        {
            $fav = Favorite::where('user_id',$user)->where('store_id',$item['id'])->first();
            if(!empty($fav))
            {
                $fav = 1;
            }else{
                $fav = 0;
            }
            array_push($favorites,$fav);
        }

        return view('home',compact('items','favorites'));
    }

}
