<?php

namespace App\Models;
use App\Models\like;
use Illuminate\Database\Eloquent\Model;


  class Post extends Model
{
    protected $fillable = ['user_id',
    'content', 'image_path', 'video_path'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function likes() {
    return $this->hasMany(Like::class);
}


public function isLikedBy(User $user) {
    return $this->likes()->where('user_id', $user->id)->exists();
}

}


