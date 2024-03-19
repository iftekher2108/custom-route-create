<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('routes',[ProfileController::class,'routes']);


