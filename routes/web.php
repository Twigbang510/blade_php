<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
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

Route::get('/index', [PageController::class, 'getIndex']);

// Route::post('/', [FormController::class, 'displayInfo']);



// Route::get('tinhtong',function(){
//     return view('sum');
// });
// Route::post('tinhtong','SumController@tinhtong');


/* Group test */
// Route::group(['prefix' => 'admin'], function(){
//     Route::get('/user1', [GroupController::class, 'user1']);
//     Route::get('/user2', [GroupController::class, 'user2']);
//     Route::get('/user3', [GroupController::class, 'user3']);

// });