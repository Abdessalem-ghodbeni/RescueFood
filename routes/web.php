<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategorieController;
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

require __DIR__.'/auth.php';

Route::middleware(['admin'])->group(function () {
    Route::get('admin/adminDashboard', [AdminController::class, 'index'])->name('admin.index');
    // Ajoute d'autres routes d'administration ici
});

Route::get('livreur/dahboard', [LivreurController::class, 'index'])->name('livreur.index');

Route::get('restorant/dahboard', [RestorantController::class, 'index'])->name('restorant.index');

/*Begin Association*/
route::get('/association/create', [AssociationController::class, 'create'])->name('association.create');
route::get('/association/{user_id}/afficher', [AssociationController::class, 'afficher'])->name('association.afficher');
Route::post('/association', [AssociationController::class, 'store'])->name('association.store');
Route::get('association/{id}/edit', [AssociationController::class, 'edit'])->name('association.edit');
Route::put('association/{id}', [AssociationController::class, 'update'])->name('association.update');
Route::delete('association/{id}', [AssociationController::class, 'destroy'])->name('association.destroy');

/*Admin*/
Route::put('/association/{id}/updateAll', [AssociationController::class, 'updateAll'])->name('association.updateAll');
Route::get('/admin/association/afficherAll', [AssociationController::class, 'afficherAll'])->name('association.afficherAll');
Route::get('association/{id}/editAll', [AssociationController::class, 'editAll'])->name('association.editAll');
Route::delete('association/{id}', [AssociationController::class, 'destroyAll'])->name('association.destroyAll');

/*End Association*/
/* Categorie start */
Route::get('/categories', [CategorieController::class, 'index'])->name('categorie.index');
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categorie.create');
Route::post('/categories', [CategorieController::class, 'store'])->name('categorie.store');
Route::get('/categories/{id}/edit', [CategorieController::class, 'edit'])->name('categorie.edit');
Route::put('/categories/{id}', [CategorieController::class, 'update'])->name('categorie.update');
Route::delete('/categories/{id}', [CategorieController::class, 'destroy'])->name('categorie.destroy');
/* Categorie end */
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
