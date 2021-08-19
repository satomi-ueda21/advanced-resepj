<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $guarded = array('id');

    public function genre(){
        return $this->belongsTo('App\Models\Genre');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function favorite() {
        return $this->hasMany('App\Models\Favorite');
    }

     public function user() {
        return $this->belongsTo('App\Models\User');
    }
}

