<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TestimonialController;
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

// Dashboard Routes
Route::controller(DashboardController::class)->middleware('auth')->group(function () {
    Route::get('admin_dashboard', 'index')->name('dashboard');
    // Override default logout route
    Route::post('admin/logout', 'logout')->name('logout');
});

// Images Routes
Route::controller(ImageController::class)->middleware('auth')->group(function () {
    Route::get('admin/gallery', 'index')->name('gallery');
    Route::get('admin/upload', 'upload')->name('upload');
    Route::post('admin/upload', 'store');

    Route::delete('admin/gallery/{id}', 'destroy')->name('gallery.delete');
});

// Testimonial Routes
Route::controller(TestimonialController::class)->middleware('auth')->group(function () {
    Route::get('admin/testimonials', 'index')->name('testimonials');
    Route::get('admin/testimonials/create', 'create')->name('testimonials.create');
    Route::post('admin/testimonials/create', 'store');

    Route::get('admin/testimonials/edit/{id}', 'edit')->name('testimonials.edit');
    Route::post('admin/testimonials/update/{id}', 'update')->name('testimonials.update');
    Route::post('admin/testimonials/delete/{id}', 'destroy')->name('testimonials.delete');
});

// Settings Route
Route::controller(SettingController::class)->middleware('auth')->group(function () {
    Route::get('admin/settings', 'index')->name('settings');
    Route::post('admin/settings/update', 'update')->name('settings.update');
    Route::post('admin/settings/password', 'password')->name('settings.password');
});

// Pages Routes
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('about', 'about');
    Route::get('gallery', 'gallery');
    Route::get('contact', 'contact');
    Route::post('contact', 'send_email')->name('contact');
});
