<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Favorite;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    /**
    *   @return View
    */
    public function index()
    {
        //予約情報取得
        $id = Auth::id();
        $carbon = Carbon::today();
        $reserve_new = [];
        $reserve_old = [];
        $reserve = Reservation::where('user_id',$id)->get();
        foreach($reserve as $book)
        {
            if($book->reserve_date ->gt($carbon))
            {
                $reserve_new[] = $book;
            }else
            {
                $reserve_old[] = $book;
            }
        }

        //お気に入り情報取得
        $favorite = Favorite::where('user_id',$id)->get();
        $store[0] = 'dummy';
        foreach($favorite as $fav)
        {
            $store[] = Store::where('id',$fav->store_id)->first();
        }

        return view('mypage',compact('reserve_new','reserve_old','favorite','store'));
    }

    public function reserve_delete(Request $request)
    {
        $id = Auth::id();
        $reserve_id = $request->input('id');

        Reservation::where('user_id',$id)->where('id',$reserve_id)->update(['delete_flag' => 1]);
        Reservation::where('user_id',$id)->where('id',$reserve_id)->delete();

        return back();
    }
}
