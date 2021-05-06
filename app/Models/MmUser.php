<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MmUser extends Model
{
    use HasFactory;

    public function role(){
        return $this->belongsTo(Role::class);
    }

    protected $fillable = [
        "id",
        "username",
        "password",
        "role_id",
        "email",
        "phone_no"
    ];
}
