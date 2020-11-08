<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\ContactUsComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class);

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class);

Route::get('/checkout', CheckoutComponent::class);

Route::get('/about-us', AboutUsComponent::class);

Route::get('/contact-us', ContactUsComponent::class);