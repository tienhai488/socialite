<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return 123;
});

Route::get('/auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
});
 
Route::get('/auth/facebook/callback', function () {
    $user = Socialite::driver('facebook')->user();

    dd($user);
    // $user->token
});