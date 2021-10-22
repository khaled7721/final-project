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
    return view('welcome');
});
Route::get('/about',function (){
    $name ='Ahmed';
    $age ='22';
    // return view('about',['name'=>$name, 'age'=>$age]);
    // return view('about')->with('name',$name)->with('age',$age);
    return view('about',compact('age','name'));              //the best and easy one of them.
});

Route::get('/contact',function (){
    
    return view('contact');
});

// Route::get('/calculater',function (){
    
//     return view('calculater');
// });
