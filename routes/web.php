<?php

use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;



//Route::get('/',function (){
//    return redirect(app()->getLocale());
//});  for disappear ar url
//
//Route::prefix('{locale}')
//    ->middleware(Localization::class)
//    ->group(function (){

Route::get('/localization/{locale}',\App\Http\Controllers\LocalizationController::class)->name('localization');

Route::middleware(Localization::class)
    ->group(function (){

        Route::get('/', \App\Livewire\Home::class)->name('home');
        Route::get('/contact', \App\Livewire\Contact::class);
        Route::get('/pricing', \App\Livewire\Pricing::class);
        Route::get('/shipping-calculator', \App\Livewire\ShippingCalculator::class);
        Route::get('/packages-tracker',\App\Livewire\PackagesTracker::class);

    });







//Route::get('/',function (){
//    return redirect(app()->getLocale());
//});
//Route::group([
//    'prefix'=> '{locale}',
//    'where' => ['locale' =>'[a-zA-Z]{2}'],
//    'middleware' => 'setLocale',
//],function (){});


