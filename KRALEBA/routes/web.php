<?php

use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;

Route::resource('companies', CompanyCRUDController::class); //test crud

