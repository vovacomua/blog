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

Route::get('/tasks', function () {
   
    $tasks = DB::table('tasks')->latest()->get();
    
    //return $tasks; //JSON
    
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
   
    $tasks = DB::table('tasks')->find($id);
    
    //dd($tasks);
    
    return view('tasks.show', compact('tasks'));
});