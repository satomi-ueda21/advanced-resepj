<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function store(){
        return $this->hasMany('App\Models\Store');
    }

    public function scopeWhereHasReservation($query,$reserve){

        $num = $query->where('reserve_date',$reserve)->get()->count();
        return $num;
    }
}
