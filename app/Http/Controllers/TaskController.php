<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TaskController extends Controller
{
    public function index()
    {
        // $tasks=[
        // 'task1',
        // 'task2',
        // 'task3'
        // ];
        // $tasks=[
        //     'task-1'=>'Maker your assignment',
        //     'task-2'=>'Check your phone',
        //     'task-3'=>'Watch a match'
        //     ];
        $tasks = DB::table('tasks')->get();
            return view('contact',compact('tasks'));
    }
    public function show($id){
        $task = DB::table('tasks')->find($id);
        return view('show',compact('task'));
    }
    public function about(){
        $name ='';
        $age = '';
        $phone_number = ' ';
        // return view('about',['name'=>$name, 'age'=>$age]);
        // return view('about')->with('name',$name)->with('age',$age);
        return view('about',compact('name','age','phone_number'));             //the best and easy one of them.
    }
    public function shows(){
        // $name = $_REQUEST['name'];
        //$age = $_REQUEST['age'];
        $name = request('name');
        $age = request('age');
        $phone_number = request('phone_number');
        return view('about',compact('name','age','phone_number'));              //the best and easy one of them.
    }
    public function tasks(){
        $tasks= [
            'first-task'=>'Task1',
            'second-task'=>'Task2',
            'third-task'=>'Task3',
            'fourth-task'=>'Task4'
        ];
        return view('tasks',compact('tasks'));
    }
    // public function show($id){
    //     $tasks= [
    //         'first-task'=>'Maker your assignment',
    //         'second-task'=>'Check your phone',
    //         'third-task'=>'Watch a match',
    //         'fourth-task'=>'Hello World',
    //     ];
    //     $task = $tasks[$id];
    //  return view('show', compact('task'));
    // }




}
