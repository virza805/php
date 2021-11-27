<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles', [ArticleController::class, 'getAllArticles']);
Route::get('/articles/{article}', [ArticleController::class, 'getArticle']);

// For Protected Or login Check
Route::middleware('auth:api')->group(function(){

    // Route::get('/cp',function(){ // just test
    //     echo 'Protection';
    // });

    Route::put('/articles/{article}', [ArticleController::class, 'updateArticle']);
    Route::delete('/articles/{article}', [ArticleController::class, 'deleteArticle']);

});
// This is same || if i need particular protection
Route::post('/articles', [ArticleController::class, 'createArticle'])->middleware('auth:api');



// Route::group(['prefix'=>'auth'],function(){

//     Route::post('login','AuthController@login');
//     Route::post('signup','AuthController@signup');

//     Route::group(['middleware' => 'auth::api'], function () {
//             Route::get('logout','AuthController@logout');
//             Route::get('user','AuthController@user');
//     });
// });


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});







Route::post('/token',[UserController::class, 'generateToken']);


Route::get('/create', function(){  # http://127.0.0.1:8000/api/create |=> run the browser for input data in mysql table
    User::forceCreate([
        'name'=>'Onamica',
        'email'=>'onamica@doe.com',
        'password'=>Hash::make('abcd1234')
    ]);

    User::forceCreate([
        'name'=>'Afroza',
        'email'=>'afroza@doe.com',
        'password'=>Hash::make('abcd1234')
    ]);
});

Route::get('/tokenc', function(){   # http://127.0.0.1:8000/api/tokenc |=> run the browser for input data in mysql table
    $user = User::find(1);
    $user->api_token = Str::random(80);
    $user->save();

    $user = User::find(2);
    $user->api_token = Str::random(80);
    $user->save();

    $user = User::find(3);
    $user->api_token = Str::random(80);
    $user->save();

    $user = User::find(4);
    $user->api_token = Str::random(80);
    $user->save();
});



