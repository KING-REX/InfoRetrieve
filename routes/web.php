<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", function () {
    return response()
        ->json(['email' => 'anijimjamesmaurice@gmail.com', 'current_datetime' => date('c'), 'github_url' => 'https://github.com/KING-REX/InfoRetrieve']);
});
