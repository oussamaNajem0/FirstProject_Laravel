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
    return view('pages.welcome');
})->name("home");

Route::get('/about-us', function () {
    return view("pages.about", []);
})->name("about");

Route::view('contact-me', "pages.contact", [
    'page_name' => 'Welcome to Contact ME View',
    'page_title' => 'Contact Us',
    'page_description' => 'Contact us',
])->name("contact");

Route::get('category', function () {
    return view("pages.category");
})->name("category");
