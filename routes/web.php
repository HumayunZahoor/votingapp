<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('home'); })->name('home'); 

Route::get('/about', function () { return view('about'); })->name('about'); 

Route::get('/contact', function () { return view('contact'); })->name('contact'); 

Route::get('/project' , function () { return view('project');})->name('project');

Route::get('/vote' , function () { return view('vote');})->name('vote');

Route::get('/register' , function () { return view('register');})->name('register');

Route::get('/votebymail' , function () { return view('votebymail');})->name('votebymail');

Route::get('/result' , function () { return view('result');})->name('result');

Route::get('/ballot' , function () { return view('ballot');})->name('ballot');

Route::get('/voteinperson' , function () { return view('voteinperson');})->name('voteinperson');

Route::get('/worker' , function () { return view('worker');})->name('worker');

Route::get('/campaign' , function () { return view('campaign');})->name('campaign');

Route::get('/news' , function () { return view('news');})->name('news');


