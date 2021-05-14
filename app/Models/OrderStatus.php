<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    // ဒီမှာက သူ့ကို သုံးထားတဲ့ goods_order_id တွေ အများကြီး ရှိနိုင်တယ်။
    // one to many မို့လို့ 
    // one သမားက method လေးပဲ ရေးမယ်။

    public function goods_orders(){
        return $this->hasMany(GoodsOrder::class);
    }
}
