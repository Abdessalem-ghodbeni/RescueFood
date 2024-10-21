<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Blog\BlogController;

use App\Http\Controllers\CategorieController;

use App\Http\Controllers\DonataireController;
use App\Http\Controllers\DonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\livraisonController;
use App\Http\Controllers\LivreurController;
use App\Http\Controllers\MenuController;
 // Assurez-vous que ce chemin est correct



use App\Http\Controllers\Post\PostController;

use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestorantController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TrajetController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profileLivreur', [ProfileController::class, 'editLivreur'])->name('profile.updateLivreur');
    Route::patch('/profileLivreur', [ProfileController::class, 'updateLivreur'])->name('profile.updateLivreur');
    Route::get('/profileResaturant', [ProfileController::class, 'editRestaurant'])->name('profile.updateRestaurant');
    Route::patch('/profileResaturant', [ProfileController::class, 'updateRestaurant'])->name('profile.updateRestaurant');
    Route::get('/profileAssociation', [ProfileController::class, 'editAssociation'])->name('profile.updateAssociation');
    Route::patch('/profileAssociation', [ProfileController::class, 'updateAssociation'])->name('profile.updateAssociation');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['admin'])->group(function () {
    Route::get('admin/adminDashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('admin/restaurants', [AdminController::class, 'getAllRestorant'])->name('admin.getAllRestorant');
    Route::get('admin/search', [AdminController::class, 'search'])->name('admin.search');
    Route::delete('admin/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::delete('admin/menu/{id}', [AdminController::class, 'destroyMenu'])->name('admin.destroyMenu');

    Route::get('admin/show/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::get('admin/allMenus', [AdminController::class, 'allMenu'])->name('admin.allMenu');
    Route::get('admin/menu/{id}', [AdminController::class, 'showMenu'])->name('admin.showMenu');

    Route::get('admin/dons', [DonController::class, 'index'])->name('dons.index');
    Route::get('admin/dons/create', [DonController::class, 'create'])->name('dons.create');
    Route::post('admin/dons', [DonController::class, 'store'])->name('dons.store');
    Route::get('admin/dons/{don}', [DonController::class, 'show'])->name('dons.show');
    Route::get('admin/dons/{don}/edit', [DonController::class, 'edit'])->name('dons.edit');
    Route::put('admin/dons/{don}', [DonController::class, 'update'])->name('dons.update');
    Route::delete('admin/dons/{don}', [DonController::class, 'destroy'])->name('dons.destroy');
    Route::get('admin/donataires', [DonataireController::class, 'index'])->name('donataires.index');
    Route::get('admin/donataires/create', [DonataireController::class, 'create'])->name('donataires.create');
    Route::post('admin/donataires', [DonataireController::class, 'store'])->name('donataires.store');
    Route::get('admin/donataires/{donataire}', [DonataireController::class, 'show'])->name('donataires.show');
    Route::get('admin/donataires/{donataire}/edit', [DonataireController::class, 'edit'])->name('donataires.edit');
    Route::put('admin/donataires/{donataire}', [DonataireController::class, 'update'])->name('donataires.update');
    Route::delete('admin/donataires/{donataire}', [DonataireController::class, 'destroy'])->name('donataires.destroy');
    Route::get('export-donataires', [DonataireController::class, 'export']);
});

// Affiche la liste des livraisons
Route::get('livraisons/dahboard', [livraisonController::class, 'index'])->name('livraisons.index');

// liste des routes resto by ghodbeny abdessalem
Route::get('restorant/dahboard', [RestorantController::class, 'index'])->name('restorant.index');

Route::get('restorant/create', [RestorantController::class, 'create'])->name('restorant.create')->middleware('auth');
Route::get('restorant/liste', [RestorantController::class, 'getAllRestorant'])->name('restorant.getAllRestorant')->middleware('auth');
// Soumettre le formulaire pour ajouter un restaurant
Route::post('restorant/store', [RestorantController::class, 'store'])->name('restorant.store')->middleware('auth');
Route::delete('restorant/{id}', [RestorantController::class, 'destroy'])->name('restorant.destroy')->middleware('auth');
Route::get('Myrestorantt/{id}', [RestorantController::class, 'show'])->name('restorant.show');
// Route pour afficher le formulaire d'ajout de menu
Route::get('menus/create', [MenuController::class, 'create'])->name('menus.create')->middleware('auth');

// Route pour soumettre le formulaire d'ajout de menu
Route::post('menus/store', [MenuController::class, 'store'])->name('menus.store')->middleware('auth');
/// liste des menu
Route::get('menus/user', [MenuController::class, 'userMenus'])->name('menus.user')->middleware('auth');

// Route pour afficher le formulaire de modification
Route::get('menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit')->middleware('auth');

// Route pour soumettre la mise à jour du menu
Route::put('menus/{id}', [MenuController::class, 'update'])->name('menus.update')->middleware('auth');
// Route pour afficher le formulaire d'édition
Route::get('rrestorant/{id}/edit', [RestorantController::class, 'edit'])->name('restorant.edit')->middleware('auth');

// Route pour mettre à jour le restaurant
Route::put('erestorant/{id}', [RestorantController::class, 'update'])->name('restorant.update')->middleware('auth');

Route::get('restorant/search', [RestorantController::class, 'search'])->name('restorant.search')->middleware('auth');
Route::delete('menus/{id}', [MenuController::class, 'destroy'])->name('menus.destroy')->middleware('auth');
Route::get('menus/{id}', [MenuController::class, 'show'])->name('menus.show')->middleware('auth');

// fin route resto liste by ghodbeny abdessalem

// Affiche le formulaire de création
Route::get('livraisons/create', [LivraisonController::class, 'create'])->name('livraisons.create');

// Stocke une nouvelle livraison
Route::post('livraisons', [LivraisonController::class, 'store'])->name('livraisons.store');

// Affiche une livraison spécifique
Route::get('livraisons/{livraison}', [livraisonController::class, 'show'])->name('livraisons.show');

Route::put('/livraisons/{id}/etat', [LivreurController::class, 'updateEtat'])->name('livraisons.updateEtat');

// Affiche le formulaire d'édition
Route::get('livraisons/{id}/edit', [LivraisonController::class, 'edit'])->name('livraisons.edit');
Route::put('livraisons/{livraison}', [livraisonController::class, 'update'])->name('livraisons.update');
Route::get('/fournisseur/dashboard', [LivreurController::class, 'index'])->name('fournisseur.fournisseurDashboard');

// Supprime une livraison
Route::delete('/livraisons/{id}', [LivraisonController::class, 'destroy'])->name('livraisons.destroy');
/*********************Trajet */
Route::resource('trajets', TrajetController::class);
/********************Livreur */
Route::get('livreur/dahboard', [LivreurController::class, 'index'])->name('livreur.index');
Route::get('restorant/dahboard', [RestorantController::class, 'index'])->name('restorant.index');

/*Begin Association*/
route::get('/association/create', [AssociationController::class, 'create'])->name('association.create');
route::get('/association/{user_id}/afficher', [AssociationController::class, 'afficher'])->name('association.afficher');
Route::post('/association', [AssociationController::class, 'store'])->name('association.store');
Route::get('association/{id}/edit', [AssociationController::class, 'edit'])->name('association.edit');
Route::put('association/{id}', [AssociationController::class, 'update'])->name('association.update');
Route::delete('association/delete/{id}', [AssociationController::class, 'destroy'])->name('association.destroy');

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
Route::resource('/stock', StockController::class);
Route::resource('/produit', ProduitController::class);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

//-----------------------------------------------------------Blog-------------------------------------//

route::get('association/{id}/blogs/', [BlogController::class, 'affiche'])->name('blogs.affiche');

Route::get('association/blogs/create/{association_id}', [BlogController::class, 'create'])->name('blogs.create');

Route::post('association/blogs', [BlogController::class, 'store'])->name('blogs.store');

// Route pour supprimer un blog
Route::delete('association/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

route::get('association/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('association/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('association/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
//---------------------------------------------------admin blog -------------------------------------//

Route::get('admin/blogs/association/{id}', [BlogController::class, 'getBlogByAssociationId'])->name('blogs.getblogbyid');
// Route pour afficher le formulaire de création de blog
Route::get('/admin/blogs/create/{association_id}', [BlogController::class, 'createBlog'])->name('blogs.createblog');

// Route pour gérer l'ajout du blog
Route::post('admin/blogs/store', [BlogController::class, 'storeBlog'])->name('blogs.storeblog');
// Route pour afficher le formulaire de modification
Route::get('admin/blogs/{id}/edit', [BlogController::class, 'editadmin'])->name('blogs.editadmin');

// Route pour gérer la mise à jour du blog
Route::put('admin/blogs/{id}', [BlogController::class, 'updateadmin'])->name('blogs.updateadmin');

Route::delete('admin/blogs/{id}', [BlogController::class, 'destroyadmin'])->name('blogs.destroyadmin');

route::get('admin/blogs/{id}', [BlogController::class, 'showadmin'])->name('blogs.showadmin');

//--------------------------------------------------admin blog -------------------------------------//

//---------------------------------------------------Blog-------------------------------------//

//------------------------Poste-------------------------------------//
Route::get('/posts/create/{blog_id}', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('association/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('association/post/{id}', [PostController::class, 'update'])->name('post.update');

//--------------------------------------------------admin poste -------------------------------------//

Route::get('admin/posts/create/{blog_id}', [PostController::class, 'createadmin'])->name('post.createadmin');
Route::post('admin/posts', [PostController::class, 'storeadmin'])->name('post.storeadmin');
Route::delete('admin/posts/{id}', [PostController::class, 'destroyadmin'])->name('posts.destroyadmin');
Route::get('admin/post/{id}/edit', [PostController::class, 'editadmin'])->name('post.editadmin');
Route::put('admin/post/{id}', [PostController::class, 'updateadmin'])->name('post.updateadmin');
//--------------------------------------------------admin poste -------------------------------------//

//------------------------Poste-------------------------------------//

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
