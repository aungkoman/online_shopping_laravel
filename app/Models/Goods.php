<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    public function Colors(){
        return $this->belongsToMany(Color::class);
    }

    public function Sizes(){
        return $this->belongsToMany(Size::class);
    }

    public function Categories(){
        return $this->belongsToMany(Category::class);
    }

    public function Photos(){
        return $this->hasMany(Photo::class);
    }
}
