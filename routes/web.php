<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/shop',[HomeController::class,'index']);
// Route::get('/',function(){
//     return view('layouts.master');
// });