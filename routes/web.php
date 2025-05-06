<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//


Route::resource('jobs', JobsController::class)->middleware('auth');;



Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/jobs/create', [JobsController::class, 'create'])->name('jobs.create');
    Route::get('/jobs/{job}/edit', [JobsController::class, 'edit'])->name('jobs.edit');
    Route::get('/jobs/{job}/show', [JobsController::class, 'show'])->name('jobs.show');
    Route::get('/jobs/{job}/delete', [JobsController::class, 'delete'])->name('jobs.delete');
});


Route::group(['middleware' => ['auth', 'role:contractor']], function () {
    Route::get('/jobs/{job}/show', [JobsController::class, 'show'])->name('jobs.show');
});

require __DIR__.'/auth.php';
