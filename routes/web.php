<?php

use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class);