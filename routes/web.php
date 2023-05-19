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
    $data = [
        'title' => 'Primi Passi su Laravel :D',
        'navlinks' =>
         [
            'home' => 'Home',
            'about' =>'About Us',
            'contacts' => 'Contact Us'
         ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/contatti', function () {
    $data = [
        'page_title' => 'Contattami qui:',
        'email' => 'chiara_97_@gmail.com'

    ];
    return view('contacts', $data);
})->name('contacts');

Route::get('/aboutus', function () {
    $data = [
        'name_surname' => 'Chiara Sucato',
        'info' => 'Studente Boolean Classe 92!!'

    ];
    return view('aboutus', $data);
})->name('aboutus');
