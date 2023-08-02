<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return Inertia::render('Home',[
        'username' => 'Faisal Ahmmed',
    ]);
})->name('home');

Route::get('/about', function () {
    return Inertia::render('About',[
    'time' => now()->toTimeString()
    ]);
})->name('about');

Route::get('/service', function () {
    return Inertia::render('Service');
})->name('service');

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::get('/service', function () {
    return Inertia::render('Service');
})->name('service');

Route::get('/blog', function () {
//    sleep(2);
    return Inertia::render('Blog');
})->name('blog');


Route::post('/logout', function () {
    dd(request('foo'));
//    dd('Your Session out');
});
