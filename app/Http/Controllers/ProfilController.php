<?php

namespace App\Http\Controllers;

use App\Http\Requests\photoRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProfilController extends Controller
{
    public function edit(User $user){
        return view("profile.edit", compact('user'));
    }

    public function update(UpdateProfileRequest $request, User $user){
        $user->update([
            "name" => $request->name,
            "pseudo" =>$request->pseudo,
            "email" =>$request->email,
            "bio" => $request->bio,
        ]);

        return redirect()->route('profile.show');
    }

    public function show(){
         $user = Auth::user();
        $posts = $user->posts()->latest()->get();

    return view('profile.show', compact('posts','user'));
    }
   public function updatePhoto(photoRequest $request)
{
    $user = Auth::user();

    // Supprimer l’ancienne photo (path فقط)
    if ($user->image) {
        Storage::disk('public')->delete($user->image);
    }

    // Sauvegarder la nouvelle
   $path = $request->file('image')->store('profiles', 'public');


    $user->update([
        'image_path' => $path,
    ]);

    return back()->with('success', 'Photo updated successfully');
}
}
