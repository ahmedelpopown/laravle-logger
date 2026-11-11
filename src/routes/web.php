<?php

use Ahmedelpopown\LaravelLogger\Controllers\HomeController;
 

Illuminate\support\facades\Route::get('/home-from-laravel-logger',[HomeController::class,'index']);
