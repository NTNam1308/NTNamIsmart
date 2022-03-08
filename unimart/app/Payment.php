<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;

class Payment extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'payment_total','payment_qty','customer_id','products_id','code','payment_method','payment_status'
    ];
    function customer(){
        return $this->belongsTo('App\Customer','customer_id');
    }
    function product(){
        return $this->hasMany('App\Product','products_id');
    }

//     protected $tst_status =[
//         '1' =>[
//             'class'=>'default',
//             'name' => 'Đang xử lý'
//         ],
//         '2' =>[
//             'class'=>'success',
//             'name' => 'Đang giao hàng'
//         ],
//         '3' =>[
//             'class'=>'info',
//             'name' => 'Hoàn thành'
//         ],
//         '4' =>[
//             'class'=>'danger',
//             'name' => 'Hủy'
//         ],
//     ];

//    public function getStatus(){
//         return Arr::get($this->status, $this->tst_status,"[N\A]");
//     }
}

