<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Backend\AdminController;

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

Route::get('/', [MainController::class, 'home']);
Route::get('/register', [MainController::class, 'register']);
Route::get('/c/register', [MainController::class, 'register']);
Route::post('/register', [MainController::class, 'post_register']);
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::post('/login', [MainController::class, 'post_login']);
Route::get('/signout', [MainController::class, 'signOut'])->name('signout');

//Admin Routes

Route::group(['middleware' => ['auth','isAdmin'],
            'as' => 'admin.',
              'prefix' => 'admin'], function () { 
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
    Route::get('/add-category', [AdminController::class, 'add_category'])->name('add-category');
    Route::post('/add-category', [AdminController::class, 'post_category'])->name('post-category');
    Route::get('/edit-category/{id}', [AdminController::class, 'edit_category'])->name('edit-category');
    Route::get('/admin/experiences', [AdminController::class, 'experiences']);
});

// Route::group([''])