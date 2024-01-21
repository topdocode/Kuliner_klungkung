<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/homepage');
Route::redirect('/admin', '/admin/dashboard');

Route::controller(HomepageController::class)->group(function () {
    Route::get('/switchLanguage/{locale}', 'switchLanguage')->name('switch-language');
    Route::get('/homepage', 'homepage')->name('homepage');
    Route::get('/homepage/location/{id}', 'locationModal')->name('location-modal');
    Route::get('/homepage/chef/{id}', 'chefModal')->name('chef-modal');
    Route::get('/homepage/detail-menu/{id}', 'detailMenu')->name('detail-menu');
    Route::get('/detail/{id}', 'history')->name('detail-menu');
});

Route::middleware(['guest'])->prefix('admin')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'loginView')->name('login');
        Route::post('/login', 'login')->name('login.action');
    });
});

Route::middleware(['guest'])->prefix('admin')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'loginView')->name('login');
        Route::post('/login', 'login')->name('login.action');
    });
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('/logout', 'logout')->name('logout.action');
    });

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::controller(MenuController::class)->group(function () {
        Route::get('/menu', 'index')->name('index-menu');
        Route::post('/menu/store', 'store')->name('store-menu');
        Route::get('/menu/edit/{id}', 'edit')->name('edit-menu');
        Route::post('/menu/edit/{id}', 'update')->name('update-menu');
        Route::post('/menu/delete/{id}', 'delete')->name('delete-menu');
    });

    Route::controller(LocationController::class)->group(function () {
        Route::get('/location', 'index')->name('index-location');
        Route::get('/location/create', 'create')->name('create-location');
        Route::post('/location/create', 'store')->name('store-location');
        Route::get('/location/edit/{id}', 'edit')->name('edit-location');
        Route::post('/location/edit/{id}', 'update')->name('update-location');
        Route::post('/location/delete/{id}', 'delete')->name('delete-location');
    });

    Route::controller(HistoryController::class)->group(function () {
        Route::get('/history', 'index')->name('index-history');
        Route::get('/history/edit/{id}', 'edit')->name('edit-history');
        Route::post('/history/edit/{id}', 'update')->name('update-history');
    });

    Route::controller(ChefController::class)->group(function () {
        Route::get('/chef', 'index')->name('index-chef');
        Route::get('/chef/create', 'create')->name('create-chef');
        Route::post('/chef/create', 'store')->name('store-chef');
        Route::get('/chef/edit/{id}', 'edit')->name('edit-chef');
        Route::post('/chef/edit/{id}', 'update')->name('update-chef');
        Route::post('/chef/delete/{id}', 'delete')->name('delete-chef');
    });

    Route::controller(FeedbackController::class)->group(function () {
        Route::get('/feedback', 'index')->name('index-feedback');
        Route::post('/feedback/create', 'store')->name('store-feedback');
        Route::get('/feedback/edit/{id}', 'edit')->name('edit-feedback');
        Route::post('/feedback/edit/{id}', 'update')->name('update-feedback');
        Route::post('/feedback/delete/{id}', 'delete')->name('delete-feedback');
    });
});
