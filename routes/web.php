<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('home'); })->name('home'); 

Route::get('/about', function () { return view('about'); })->name('about'); 

Route::get('/contact', function () { return view('contact'); })->name('contact'); 

Route::get('/project' , function () { return view('project');})->name('project');

Route::get('/vote' , function () { return view('vote');})->name('vote');
