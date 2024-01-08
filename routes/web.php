<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/contact', \App\Livewire\Contact::class);
Route::get('/pricing', \App\Livewire\Pricing::class);
Route::get('/shipping-calculator', \App\Livewire\ShippingCalculator::class);


Route::get('/packages-tracker',\App\Livewire\PackagesTracker::class);

