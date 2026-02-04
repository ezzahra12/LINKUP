<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;

class User extends AuthUser
{
    protected $fillable = [
        "name",
        "pseudo",
        "bio",
        "email",
        "password",
        "image_path"
    ];

    protected $hidden = [
        "password"
    ];
    // public function sendRequest(){
    //     return $this->hasMany(friend)
    // }
    // User.php
// public function getImagePathAttribute()
// {
//     return $this->image ? asset('storage/' . $this->image) : null;
// }

}
