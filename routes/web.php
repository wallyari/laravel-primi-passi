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
    $helloLaravel = 'Hello Laravel!';
    $navBarLinks = ['Home', 'About', 'Blog', 'ProjectGallery'];
    
    return view('home', [
        'helloLaravel' => $helloLaravel,
        'navBarLinks' => $navBarLinks ]);

})-> name('Home');

Route::get('About', function() {
    $navBarLinks = ['Home', 'About', 'Blog', 'ProjectGallery'];
    return view('about', ['navBarLinks' => $navBarLinks]);
})->name('About');

Route::get('/Blog', function() {
    $navBarLinks = ['Home', 'About', 'Blog', 'ProjectGallery',];
    return view('blog', ['navBarLinks' => $navBarLinks]);
})->name('Blog');

Route::get('/ProjectGallery', function() {
    $navBarLinks = ['Home', 'About', 'Blog', 'ProjectGallery',];
    return view('gallery', ['navBarLinks' => $navBarLinks]);
})->name('ProjectGallery');