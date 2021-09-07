<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;


class DetailController extends Controller
{
    public function index($id)
    {
        $items = Store::find($id);
        $data = $id;
        $user = Auth::id();
        $reserve = Reservation::where('user_id',$user)->get();

        return view('detail',compact('items','data','reserve'));
    }

    public function reservation(ReservationRequest $request)
    {
        Reservation::create([
            'store_id'=>$request->store_id,
            'user_id'=>$request->user_id,
            'reserve_date'=>$request->reserve_date,
            'people' => $request ->people
        ]);

        return view('done');
    }
}

