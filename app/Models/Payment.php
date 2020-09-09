<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id', 'amount', 'type', 'date'
    ];
//    protected $timestamp = false;
    public function user() {
        return $this->belongsTo('App\User','user_id','id');
    }
}
