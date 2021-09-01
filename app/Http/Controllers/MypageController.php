<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class MypageController extends Controller
{
    /**
    *   @return View
    */
    public function index($id)
    {
        $reserve = Reservation::where('user_id',$id)->get();
        $data = $id;

        return view('mypage',compact('reserve','data'));
    }

    public function reserve_delete($id)
    {
        Reservation::where('id',$id)->update(['delete_flag'=>1]);
        Reservation::where('id',$id)->delete();
        session()->flash('message','予約をキャンセルしました。');

        return back();
    }
}
