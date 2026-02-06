<?php

namespace App\Http\Controllers;

use App\Models\FriendRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendRequestController extends Controller
{
    public function send(User $user)
    {
        $sender = Auth::user();

        $exists = FriendRequest::where('sender_id', $sender->id)
                                ->where('receiver_id', $user->id)
                                ->exists();

        if (Auth::id() === $user->id) {
    return back()->with('error', 'You cannot send a friend request to yourself');
}
 
        if (!$exists) {
            FriendRequest::create([
                'sender_id' => $sender->id,
                'receiver_id' => $user->id,
                'status' => 'pending'
            ]);
        }

        return back()->with('success', 'Friend request sent!');
    }





    public function accept(FriendRequest $request)
{
    $request->update(['status' => 'accepted']);
    return back()->with('success', 'Friend request accepted!');
}

public function decline(FriendRequest $request)
{
    $request->delete();
    return back()->with('success', 'Friend request declined!');
}

}

