<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LivreurController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestorantController;
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



require __DIR__ . '/auth.php';

Route::middleware(['admin'])->group(function () {
    Route::get('admin/adminDashboard', [AdminController::class, 'index'])->name('admin.index');
    // Ajoute d'autres routes d'administration ici
});

Route::get('livreur/dahboard', [LivreurController::class, 'index'])->name('livreur.index');

Route::get('restorant/dahboard', [RestorantController::class, 'index'])->name('restorant.index');

Route::get('association/dahboard', [AssociationController::class, 'index'])->name('association.index');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
