<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/',[MainController::class, 'main']);
Route::get('/features',[MainController::class, 'features']);
Route::get('/contact',[MainController::class, 'contact']);

// Route::get('/hello/world', 'app\Http\Controllers\MainController@sayHi');
/*
Route::get('/hello/world',[MainController::class, 'sayHi']);

Route::get('/hello', function () {
    return ['name'=>'world'];
});

Route::get('/hello/{world}', function ($world) {
    // return "Hello World";
    return view("info",[
        'name' => $world,
        'date' => date("j M Y h:i:sa"),
        'time' => time()
    ]);
});

Route::get('/hello/{name}', function ($worldName) {
    $worldName = ucwords($worldName);
    return "Hello {$worldName}";
});

Route::get('/greet/{greetings}/{worldName}', function ($greetings, $worldName) {
    $worldName = ucwords($worldName);
    $greetings = ucwords($greetings);
    return "Hello {$greetings} {$worldName}";
});
// Route::post('/say', function (Request $request) {
//     $newName = $request->post('name'); // HTTP POST VERB
//     return view("info",[
//         'name' => $newName,
//     ]);
//     // echo "Hello {$newName}";
//     // return view("info",[
//     //     'name' => $newName
//     //     // 'date' => date("j M Y h:i:sa"),
//     //     // 'time' => time()
//     // ]);
// });
*/
