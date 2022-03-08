<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'customer_name','customer_phone','customer_address','customer_email','customer_notes'
    ];
    function product(){
        return $this->belongsToMany('App\Product')->using('App\Payment')->withPivot('payment_total','created_at','payment_qty');
    }
}
