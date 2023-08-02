<?php

use App\Models\User;
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

    return Inertia::render('Home', [
        'title' => 'Home - My App',
    ]);
})->name('home');

Route::get('/about', function () {
    return Inertia::render('About', [
        'title' => 'About - My App',
    ]);
})->name('about');

Route::get('/service', function () {
    return Inertia::render('Service', [
        'title' => 'Service - My App',
    ]);
})->name('service');

Route::get('/contact', function () {
    return Inertia::render('Contact', [
        'title' => 'Contact - My App',
    ]);
})->name('contact');

Route::get('/blog', function () {
//    sleep(2);
    return Inertia::render('Blog', [
        'title' => 'Blog - My App',
    ]);
})->name('blog');

Route::get('/users', function () {
//    sleep(2);
    $users = User::paginate(20);
    return Inertia::render('Users', [
        'time' => now()->toTimeString(),
        'title' => 'Users - My App',
        'users' => $users,
    ]);
})->name('users');

Route::get('/settings', function () {
//    sleep(2);
    return Inertia::render('Settings', [
        'title' => 'Settings - My App',
    ]);
})->name('settings');


Route::post('/logout', function () {
    dd(request('foo'));
//    dd('Your Session out');
});
