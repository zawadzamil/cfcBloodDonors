<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});

Route::get('blog', function () {
    return view('blog');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('team', function () {
    return view('team');
});
Route::get('donation', function () {
    return view('donation');
});
Route::get('adminPannel', function () {
    return view('adminPannel');
});
Route::get('addDonor', function () {
    return view('addDonor');
});
Route::get('allDonor', 'App\Http\Controllers\DonorManagement@allDonor');

Route::get('become_a_donor', 'App\Http\Controllers\DonorManagement@addDonor');
Route::post('addNewDonor', 'App\Http\Controllers\DonorManagement@addDonorToDatabase');
Route::get('register', 'App\Http\Controllers\AdminMangement@register');
Route::post('stroreAdmin', 'App\Http\Controllers\AdminMangement@storeUser');

Route::get('/admin', 'App\Http\Controllers\AdminMangement@admin')->name('admin');
Route::post('adminValidate', 'App\Http\Controllers\AdminMangement@authenticate');
