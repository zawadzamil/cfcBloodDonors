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
//Route::get('contact', function () {
//    return view('contact');
//});
//Route::get('team', function () {
//    return view('team');
//});

//Route::get('adminPannel', function () {
//    return view('adminPannel');
//});
Route::get('addDonor', function () {
    return view('addDonor');
});
Route::get('searchResult', function () {
    return view('searchResult');
});

Route::get('edit_donor', function () {
    return view('edit_donor');
});

Route::get('donation', 'App\Http\Controllers\PostManagement@allPost');
Route::get('allDonor', 'App\Http\Controllers\DonorManagement@allDonor');
Route::get('team', 'App\Http\Controllers\DonorManagement@allDonorTeam');


Route::get('contact', 'App\Http\Controllers\RequestManagement@showContact');
Route::post('addMessage', 'App\Http\Controllers\RequestManagement@addMessagetoDatabase');


Route::get('delete_donor/{id}', 'App\Http\Controllers\DonorManagement@deleteDonor');
Route::get('bloodpost', 'App\Http\Controllers\PostManagement@bloodPost');
Route::post('addPost', 'App\Http\Controllers\PostManagement@addPosttoDatabase');

Route::get('become_a_donor', 'App\Http\Controllers\DonorManagement@addDonor');
Route::post('addNewDonor', 'App\Http\Controllers\DonorManagement@addDonorToDatabase');
Route::post('updateDonor/{id}', 'App\Http\Controllers\DonorManagement@updateDonor');
Route::get('register', 'App\Http\Controllers\AdminMangement@register');
Route::post('stroreAdmin', 'App\Http\Controllers\AdminMangement@storeUser');

Route::get('/admin', 'App\Http\Controllers\AdminMangement@admin')->name('admin');
Route::post('adminValidate', 'App\Http\Controllers\AdminMangement@authenticate');

Route::get('edit_donor/{id}', 'App\Http\Controllers\DonorManagement@ediTDonor');
Route::post('addNewDonor', 'App\Http\Controllers\DonorManagement@addDonorToDatabase');

Route::get('message', 'App\Http\Controllers\RequestManagement@allMessage');
Route::get('delete_message/{id}', 'App\Http\Controllers\RequestManagement@deleteMessage');

//Route::get('adminPannel', 'App\Http\Controllers\DonorManagement@adminPannelCounter');
Route::get('adminPannel', 'App\Http\Controllers\AdminMangement@dashboard');

Route::get('logout', '\App\Http\Controllers\AdminMangement@logout');

Route::post('searchDonor', '\App\Http\Controllers\DonorManagement@search');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
