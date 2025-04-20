<?php

use App\Events\ChangeProgressValue;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('reverb-example', function ($hello) {
//     return event(ChangeProgressValue::class);
// });
