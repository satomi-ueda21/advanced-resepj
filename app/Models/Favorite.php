<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Favorite extends Model
{
    protected $guarded = array('id');

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function store(){
        return $this->belongsTo('App\Models\Store');
    }

     //お気に入りが既にされているかを確認
    public function fav_exist($id=1, $store_id=1)
    {
        // Favoriteテーブルのレコードにid, $store_idが一致するものを取得
        $exist = Favorite::where('user_id', '=', $id)->where('store_id', '=', $store_id)->get();

        // // レコード（$exist）が存在するなら
        // if (!$exist->isEmpty()) {
        //     return true;
        // } else {
        // // レコード（$exist）が存在しないなら
        //     return false;
        // }
    }
}
