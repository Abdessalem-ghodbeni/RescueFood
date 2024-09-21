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
// liste des routes resto by ghodbeny abdessalem 
Route::get('restorant/dahboard', [RestorantController::class, 'index'])->name('restorant.index');

Route::get('restorant/create', [RestorantController::class, 'create'])->name('restorant.create')->middleware('auth');
Route::get('restorant/liste', [RestorantController::class, 'getAllRestorant'])->name('restorant.getAllRestorant')->middleware('auth');
// Soumettre le formulaire pour ajouter un restaurant
Route::post('restorant/store', [RestorantController::class, 'store'])->name('restorant.store')->middleware('auth');
Route::delete('restorant/{id}', [RestorantController::class, 'destroy'])->name('restorant.destroy')->middleware('auth');
Route::get('Myrestorantt/{id}', [RestorantController::class, 'show'])->name('restorant.show');



// Route pour afficher le formulaire d'édition
Route::get('rrestorant/{id}/edit', [RestorantController::class, 'edit'])->name('restorant.edit')->middleware('auth');

// Route pour mettre à jour le restaurant
Route::put('erestorant/{id}', [RestorantController::class, 'update'])->name('restorant.update')->middleware('auth');

Route::get('restorant/search', [RestorantController::class, 'search'])->name('restorant.search')->middleware('auth');

// fin route resto liste by ghodbeny abdessalem

Route::get('livreur/dahboard', [LivreurController::class, 'index'])->name('livreur.index');

Route::get('association/dahboard', [AssociationController::class, 'index'])->name('association.index');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
