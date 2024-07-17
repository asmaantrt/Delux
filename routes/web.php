<?php

use App\Http\Controllers\SiteController;
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
Route::get('/',[SiteController::class,'index'])->name('website-pages.home');

//AboutUS view
Route::get('/aboutUs', function () {
    return view('website-pages.about-us');
})->name('website-pages.about');

//mobile-section
Route::get('/mobile', function () {
    return view('website-pages.mobile-section');
})->name('website-pages.mobile');

//computer-section
Route::get('/computer', function () {
    return view('website-pages.computer-section');
})->name('website-pages.computer');

//computer-equipment
Route::get('/equipment', function () {
    return view('website-pages.computer-equipment');
})->name('website-pages.equipment');

//contact
Route::get('/contact', function () {
    return view('website-pages.contact');
})->name('website-pages.contact');