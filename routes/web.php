<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", function () {
    return response()
        ->json(['email' => 'anijimjamesmaurice@gmail.com', 'current_datetime' => now()->toIso8601ZuluString(), 'github_url' => 'https://github.com/KING-REX/InfoRetrieve']);
});
