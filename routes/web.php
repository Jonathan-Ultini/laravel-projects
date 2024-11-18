<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TypeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('pages.home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('projects', ProjectController::class);
});


//come dire:
// Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
//     // Rotte CRUD manuali
//     Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
//     Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
//     Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
//     Route::get('projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
//     Route::get('projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
//     Route::put('projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
//     Route::delete('projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
// });

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('types', TypeController::class);
});
