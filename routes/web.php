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
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin/dashboard',\App\Http\Livewire\Auth\Admin\Dashboard::class)->name('auth.admin.dashboard');;
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard',\App\Http\Livewire\Auth\Dashboard::class)->name('auth.dashboard');;
});

//Route::get('/admin/dashboard', function () {
//    return view('admin/dashboard');
//})->middleware(['auth'])->name('auth.admin.dashboard');

//Route::get('/auth/dashboard', function () {
//    return view('auth.dashboard');
//})->middleware(['auth'])->name('auth.dashboard');

require __DIR__.'/auth.php';
