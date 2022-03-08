<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productcat extends Model
{
    //
    protected $table='productcats';
    protected $fillable = [
        'catname', 'creator','parent_id'
    ];

    // public function childs(){
    //     return $this->hasMany(Productcat::class,'parent_id');
    // }

    // function product(){
    //     return $this->hasOne('App\Product');
    // }
}
