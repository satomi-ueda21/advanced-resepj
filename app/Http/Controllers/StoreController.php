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
        //ホーム画面で表示するお店情報取得。検索したら一致したお店のみ取得。
        $query = Store::query();

        $area = $request->input('area');
        $genre = $request->input('genre');
        $keyword = $request->input('keyword');

        if(!empty($area) && $area!=='All area'){
            $query->where('area_id',$area);
        }

        if(!empty($genre) && $genre!=='All genre'){
            $query->where('genre_id',$genre);
        }

        if(!empty($keyword)){
            $query->where('name','like','%'.$keyword.'%');
        }
        $items = $query->get();

        //今のセッションを消去して新しいセッションを保存
        $request->session()->forget('search');
        $request->session()->put('search',[
            'area'=>$area,
            'genre'=>$genre,
            'keyword'=>$keyword
        ]);

        //ログインユーザーのお気に入り表示機能
        $favorites[0] = 'dummy';
        $fav_counts[0] = 'dummy';
        $user = Auth::id();

        foreach($items as $item)
        {
            //お気に入り表示
            $fav = Favorite::where('user_id',$user)->where('store_id',$item['id'])->first();
            if(!empty($fav))
            {
                $fav = 1;
            }else{
                $fav = 0;
            }
            array_push($favorites,$fav);

            //全ユーザーのお気に入り数カウント
            $fav_count = 0;
            $fav_count = Favorite::where('store_id',$item['id'])->count();
            $fav_counts[] = $fav_count;
        }

        return view('home',compact('items','favorites','fav_counts'));
    }

}
