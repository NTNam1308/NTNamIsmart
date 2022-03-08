<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name', 'desc','content','price','thumbnail','product_status','product_id','status'
    ];
    
    // function productcat(){
    //     return $this->belongsTo('app\Productcat');
    // }

    function customer(){
        return $this->belongsToMany('App\Customer')->using('App\Payment')->withPivot('payment_total','created_at','payment_qty');
    }
}
