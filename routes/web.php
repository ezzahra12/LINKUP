<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\FriendRequestController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;


Route::get("/login", [AuthController::class, 'showLogin'])->name('login');
Route::get("/register", [AuthController::class, 'showRegister'])->name('register');

Route::post("/login", [AuthController::class, 'login'])->name('submitLogin');
Route::post("/register", [AuthController::class, 'register'])->name('submitRegister');
Route::post("/logout", [AuthController::class, 'logout'])->name('logout');
Route::put("/reset_password", [AuthController::class, 'reset_password'])->name('reset_password');


Route::get("/", [HomeController::class, 'index'])->name('home');


Route::get("/profile", [ProfilController::class, 'show'])->name('profile.show');
Route::get("/profile/{user}/edit", [ProfilController::class, 'edit'])->name('profile.edit');
Route::put("/profile/{user}/update", [ProfilController::class, 'update'])->name('profile.update');

Route::post("/search", [HomeController::class, 'search'])->name('search');


Route::put('/profile/photo', [ProfilController::class, 'updatePhoto'])
    ->name('profile.photo.update');


Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::post('/friend-request/{user}', [FriendRequestController::class, 'send'])->name('friend.request.send');

Route::post('/friend-request/{request}/accept', [FriendRequestController::class, 'accept'])->name('friend.request.accept');
Route::post('/friend-request/{request}/decline', [FriendRequestController::class, 'decline'])->name('friend.request.decline');


Route::post('/posts', [PostsController::class, 'store'])->middleware('auth')->name('posts.store');

Route::post('/posts/{post}/like', [LikeController::class, 'toggle'])
    ->name('posts.like');
