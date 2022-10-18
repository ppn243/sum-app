<?php

use App\Http\Controllers\CongController;
use App\Http\Controllers\Mycontroller;
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
    return view('welcome');
});

Route::get('shopee', function () {
    echo 'Hello World';
});

Route::get('name/{name}/{age?}', function ($name, $age = '') {
    echo 'Hello ' .$name;
    echo "<br>Age: " .$age;
})->where(["age" => "[0-9]+"]);

Route::get('route/demo', function () {
    echo 'Hello route name';
})-> name(name:'route-name');

Route::get('get/route/name', function () {
    echo '<a href="'.route('route-name').'">route name</a>';
});

Route::prefix('admin/post')->group(function () {
    Route::get('/', function() {
        echo ' get post';
    });

    Route::get('edit', function() {
        echo 'edit post';
    });
});

// Route::get('goi-controller', 'Mycontroller@getData');
Route::get('goi-controller/{name}', [Mycontroller::class, 'getData']);

Route::get('tinhtong', function() {
    return view('Sum');
});

Route::post('tinhtong', [CongController::class, 'tinhtong']);
// Route::post('tinhtong', 'CongController@tinhtong');