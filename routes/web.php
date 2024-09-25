<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\LivreurController;
use App\Http\Controllers\Post\PostController; // Assurez-vous que ce chemin est correct
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




//------------------------Blog-------------------------------------//
route::get('association/blogs', [BlogController::class, 'affiche'])->name('blogs.affiche');




Route::get('association/blogs/create', [BlogController::class, 'create'])->name('blogs.create');

Route::post('association/blogs', [BlogController::class, 'store'])->name('blogs.store');

// Route pour supprimer un blog
Route::delete('association/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

route::get('association/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('association/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('association/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
//------------------------Blog-------------------------------------//


//------------------------Poste-------------------------------------//
Route::get('/posts/create/{blog_id}', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

//------------------------Poste-------------------------------------//


