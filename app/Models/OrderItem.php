<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    // GoodsOrder 1:M OrderItem
    public function goods_order(){
        return $this->belongsTo(GoodsOrder::class);
    }

    // ပြောရရင် ဒါက translation အတွက်ပဲ
    // ရှိရင် Object , မရှိရင် null ပဲ
    public function goods(){
        return $this->belongsTo(Goods::class);
    }
    public function color(){
        return $this->belongsTo(Color::class);
    }
    public function size(){
        return $this->belongsTo(Size::class);
    }
    
    protected $fillable = [
        "id",
        "goods_id",
        "color_id",
        "size_id",
        "quantity",
        "price",
        "cost",
        "goods_order_id",
    ];


}
