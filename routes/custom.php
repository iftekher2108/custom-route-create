<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('custom',[ProfileController::class,'custom']);

Route::get('new',[User::class,'new']);


