<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class DetailController extends Controller
{
    //お店の詳細情報とID、ログイン済みユーザーの予約情報があれば詳細ページに送る。
    public function index($id)
    {
        $items = Store::find($id);
        $data = $id;
        $carbon = Carbon::today();
        $user = Auth::id();
        $reserve = Reservation::where('user_id',$user)->where('store_id',$data)->where('reserve_date','>=',$carbon)->get();

        return view('detail',compact('items','data','reserve'));
    }

    public function reservation(ReservationRequest $request)
    {
        //ReservationRequestでバリデーションした予約情報を登録。予約完了ページを表示。
        Reservation::create([
            'store_id'=>$request->store_id,
            'user_id'=>$request->user_id,
            'reserve_date'=>$request->reserve_date,
            'people' => $request ->people
        ]);

        return view('done');
    }
}

