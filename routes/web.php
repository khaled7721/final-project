<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Facade\FlareClient\View;

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

Route::get('/', function(){
    return view('welcome');
});
Route::get('/about',[TaskController::class,'about']);
Route::post('/about',[TaskController::class,'shows']);
Route::get('/contact',[TaskController::class,'index']);
Route::get('/tasks', [TaskController::class,'tasks']);
// Route::get('/show/{id}',[TaskController::class,'show']);
Route::get('/contact/{id}',[TaskController::class,'show']);
Route::get('/app',[TaskController::class,'app']);
Route::get('/taskes',[TaskController::class,'taskes']);
