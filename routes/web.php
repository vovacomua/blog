<?php

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

use App\Task;

Route::get('/tasks', function () {
   
    $tasks = Task::all();
    
    //return $tasks; //JSON
    
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
   
    $tasks = Task::find($id);
    
    //dd($tasks);
    
    return view('tasks.show', compact('tasks'));
});
