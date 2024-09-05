<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); //named route that returns a view for the homepage
})->name('homepage');

Route::get('/about', function () {
    return view('about'); //named route that returns a view for the about page
})->name('about');

Route::redirect('/home', '/'); //redirects /home to / (which is index, named as homepage) 

//contact form view

/* route with required parameter
Route::get('/user/{username}', function ($username) {
    return view('index', ['username' => $username]);
});
*/

/* route with optional parameter
Route::get('/user/{username?}', function ($username = 'Guest') {
    return view('welcome_user', ['username' => $username]);
});
*/

Route::get('/user/{username?}', function ($username = null) { //route with regular expression constraints
    // Check if the username is valid (only alphabetic characters)
    if (!preg_match('/^[a-zA-Z]+$/', $username)) {
        $username = 'Guest';
    }
    return view('index', ['username' => $username]);
});


Route::get('/education-experience', function () {
    return view('education-experience');
})->name('education-experience');

Route::get('/project-skills', function () {
    return view('project-skills');
})->name('project-skills');


Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
