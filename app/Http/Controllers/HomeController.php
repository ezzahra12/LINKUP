<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\FriendRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function search(Request $request){
        $search = $request->search;
        $users = User::where('id', '!=', Auth::id())->get();

foreach ($users as $user) {
    $user->friendRequest = FriendRequest::where(function ($query) use ($user) {
        $query->where('sender_id', Auth::id())
              ->where('receiver_id', $user->id);
    })->orWhere(function ($query) use ($user) {
        $query->where('sender_id', $user->id)
              ->where('receiver_id', Auth::id());
    })->first();
}

return view('search', compact('users','search'));
}
}
