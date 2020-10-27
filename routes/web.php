<?php

use App\Http\Controllers\PizzaController;
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
Route::get('/pizzas', [PizzaController::class, 'index']);       #The way of using controllers is changed from laravell 8, see netninja's controller videos comments for more info.
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);
