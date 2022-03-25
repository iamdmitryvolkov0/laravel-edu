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

///Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    $res = 2 + 3;
    $name = 'John';
    return view('home', compact('res', 'name'));
});

Route::get('/about', function () {
    return "<h1>Welcome to about page.</h1>";
});


Route::match(['post', 'get'], '/contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
        echo "Welcome {$_POST['name']}<br>";
        echo "Activation code sent to {$_POST['email']}<br><br>";
    }
    return view('contact');
});
