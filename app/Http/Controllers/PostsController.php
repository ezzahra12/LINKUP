<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function store(Request $request)
{

    $post = new Post();
    $post->user_id = Auth::id();
    $post->content = $request->content;

    if($request->hasFile('image')){
        $post->image_path = $request->file('image')->store('posts/images', 'public');
    }

    if($request->hasFile('video')){
        $post->video_path = $request->file('video')->store('posts/videos', 'public');
    }

    $post->save();

    return back()->with('success', 'Post added successfully!');
}

}
