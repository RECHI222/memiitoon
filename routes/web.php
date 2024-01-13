<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\VocabularyController;

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


Route::get('/', function() {
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

require __DIR__.'/auth.php';

Route::resource('titles', TitleController::class)->middleware(['auth', 'verified']);
/*
Route::get('/titles', [TitleController::class, 'index'])->middleware(['auth', 'verified'])->name('titles.index');

Route::get('/titles/create', [TitleController::class, 'create'])->middleware(['auth', 'verified'])->name('titles.create');

Route::post('/titles', [TitleController::class, 'store'])->middleware(['auth', 'verified'])->name('titles.store');

Route::get('/titles/{title}', [TitleController::class, 'show'])->middleware(['auth', 'verified'])->name('titles.show');
*/
Route::resource('vocabularies', VocabularyController::class)->middleware(['auth', 'verified']);;