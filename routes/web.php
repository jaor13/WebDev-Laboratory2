<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::get('/education-experience', function () {
    return view('education-experience');
})->name('education-experience');

Route::get('/project-skills', function () {
    return view('project-skills');
})->name('project-skills');

Route::get('/about', function () {
    return view('about');
})->name('about');