<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TypeController;
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


// rotta per pagina di amministrazione
// Route::get('/admin', [DashboardController::class, 'index'])->middleware(['auth']);

Route::middleware(['auth', 'verified'])
        ->name('admin.')
        ->prefix('admin')
        ->group(function () {
            // qui inserisco tutte le rotte che vogliono che siano:
            // raggruppate sotto lo stesso middlware
            // i loro nomi iniziano con 'admin.'
            // tutti i loro url iniziano con 'admin/'
            Route::get('/', [DashboardController::class, 'index']);
            
            Route::resource('/projects', ProjectController::class);

            // aggiungo la rotta per i tipi
            Route::resource('types', TypeController::class);
            
            }
        );
