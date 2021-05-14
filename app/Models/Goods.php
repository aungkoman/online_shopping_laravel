<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    public function sizes(){
        return $this->belongsToMany(Size::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    
    protected $fillable = [
        "id",
        "name",
        "description",
        "price_original",
        "price",
        "stock",
        "brand_id"
    ];
}
