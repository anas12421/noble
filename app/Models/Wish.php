<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Wish extends Model
{
    use HasFactory;

    function rel_to_product(){
        return $this->belongsTo(Product::class , 'product_id');
    }
    function rel_to_inventory(){
        return $this->belongsTo(Inventory::class , 'product_id','color_id','size_id');
    }


}
