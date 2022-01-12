<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = False;
    protected $fillable = ['product_id','user_id','status','payment_method','payment_status','address'];
}
