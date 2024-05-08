<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', 'App\Http\Controllers\ProjectController@index');
Route::get('/managers/{id}', 'App\Http\Controllers\ManagerController@show');
