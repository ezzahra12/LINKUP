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

 public function posts() {
        return $this->hasMany(Post::class);
    }

    public function likes() {
    return $this->hasMany(Like::class);
}

    public function sentFriendRequests()
    {
        return $this->hasMany(FriendRequest::class, 'sender_id');
    }

    public function receivedFriendRequests()
    {
        return $this->hasMany(FriendRequest::class, 'receiver_id');
    }
    // public function sendRequest(){
    //     return $this->hasMany(friend)
    // }
    // User.php
// public function getImagePathAttribute()
// {
//     return $this->image ? asset('storage/' . $this->image) : null;
// }

}
