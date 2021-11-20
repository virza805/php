<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/', 'App\Http\Controllers\WelcomeController@index');
Route::get('/shout', [App\Http\Controllers\HomeController::class, 'shoutHome'])->name('shout');
Route::post('/savestatus', [App\Http\Controllers\HomeController::class, 'saveStatus'])->name('shout.save');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('shout.profile');
Route::get('/shout/{nickname}', [App\Http\Controllers\HomeController::class, 'publicTimeline'])->name('shout.public');
Route::post('/saveprofile', [App\Http\Controllers\HomeController::class, 'saveProfile'])->name('shout.saveprofile');
Route::get( '/shout/makefriend/{friendId}', [App\Http\Controllers\HomeController::class,'makeFriend'])->name('shout.makefriend');
Route::get( '/shout/unfriend/{friendId}', [App\Http\Controllers\HomeController::class,'unFriend'])->name('shout.unfriend');



