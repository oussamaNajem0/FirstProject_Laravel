<?php

use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
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
    return view('pages.welcome',[
        'heading' => 'Welcome to my first page with laravel',
        'listing' => [
            [
                'id' => 1,
                'title' => 'First Listing',
                'description' => 'This is the first listing : Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, atque expedita repudiandae sit eligendi natus laboriosam vel quis nostrum ad omnis sed ab suscipit quibusdam quia soluta corrupti asperiores provident!'
            ],
            [
                'id' => 2,
                'title' => 'Second Listing',
                'description' => 'This is the second listing : Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, atque expedita repudiandae sit eligendi natus laboriosam vel quis nostrum ad omnis sed ab suscipit quibusdam quia soluta corrupti asperiores provident!'
            ],
            [
                'id' => 3,
                'title' => 'Third Listing',
                'description' => 'This is the third listing : Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, atque expedita repudiandae sit eligendi natus laboriosam vel quis nostrum ad omnis sed ab suscipit quibusdam quia soluta corrupti asperiores provident!'
            ]
        ],
    ]);
})->name("home");

Route::get('/about-us', function () {
    return view("pages.about");
})->name("about");

Route::view('contact-me', "pages.contact", [
    'page_name' => 'Welcome to Contact ME View',
    'page_title' => 'Contact Us',
    'page_description' => 'Contact us',
])->name("contact");

Route::get('category', function () {
    return view("pages.category");
})->name("category");

// Route::get('/users/{id}', function ($id) {
//     ddd($id);
//     return response('post'.$id);
// });

// Route::get('/search', function (Request $request) {
//     return response($request->name .' '. $request->city);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
