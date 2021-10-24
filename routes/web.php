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
    $name ='';
    $age = '';
    // return view('about',['name'=>$name, 'age'=>$age]);
    // return view('about')->with('name',$name)->with('age',$age);
    return view('about',compact('name','age'));             //the best and easy one of them.
});

Route::post('/about',function (){
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    return view('about',compact('name','age'));              //the best and easy one of them.
});
Route::get('/contact',function (){
    // $tasks=[
    //   'task-1',
    //   'task-2',
    //   'task-3'
    // ];


    $tasks=[
    'task-1'=>'Maker your assignment',
    'task-2'=>'Check your phone',
    'task-3'=>'Watch a match'
    ];
    return view('contact',compact('tasks'));
});
