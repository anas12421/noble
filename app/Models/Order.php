<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_billing(){
        return $this->belongsTo(Billing::class, 'order_id');
    }
    function rel_to_shipping(){
        return $this->belongsTo(Shipping::class, 'order_id');
    }
}
