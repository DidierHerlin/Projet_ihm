<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\VehiculesController;
use App\Http\Controllers\ConducteurController;
use App\Http\Controllers\TrajetsController;
use App\Http\Controllers\DepensesController;
use App\Http\Controllers\VoyageursController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\BilletsController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\RouteFileRegistrar;
 use App\Http\Controllers\Auth\LoginController;
 use App\Http\Controllers\ProfileController;
 use App\Http\Controllers\RoleMiddleware;
 use App\Http\Controllers\AdminController;
// use App\Http\Controllers\Authenticate;



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
Route::get('/clients/voyage', function (){
    return view('clients.voyage');
});
Route::get('/clients/information', function (){
    return view('clients.information');
});
Route::get('/auth/login', function (){
    return view('auth.login');
});
Route::get('/auth/register', function (){
    return view('auth.register');
});


// route recettes

Route::controller(RecetteController::class)->group(function(){
    Route::get('/recettes/recette','index')->name('recette');
    Route::get('/recettes/ajout_recette','create');
    Route::post('/recettes/recette', 'store')->name('ajoutRecette');
    Route::get('/recettes/modifier_recette/{id}', 'edit')->name('editRecette'); // Route pour afficher le formulaire d'édition
    Route::post('/recettes/recette/{id}', 'update')->name('modifierRecette'); // Route pour mettre à jour la recette
    Route::delete('/recettes/recette/{id}','destroy')->name('supRecettes');
});


//route vehicule
Route::controller(VehiculesController::class)->group(function(){
    Route::get('/vehicule/vehicule','index')->name('vehicule');
    Route::get('/vehicule/ajout_vehicule','create');
    Route::post('/vehicule/vehicule', 'store')->name('ajoutVehicule');
    Route::get('/vehicule/modifier_vehicule/{id}', 'edit')->name('editVehicule');
     Route::post('/vehicule/vehicule/{id}', 'update')->name('modVeh');
     Route::delete('/vehicule/vehicule/{id}','destroy')->name('supVeh');
});
/////////////////////////////////////
//route conducteur
Route::controller(ConducteurController::class)->group(function(){
    Route::get('/conducteur/conducteur','index')->name('conducteur');
    Route::get('/conducteur/ajout_conducteur','create');
    Route::post('/conducteur/conducteur', 'store')->name('store');
    Route::get('/conducteur/modifier_conducteur/{id}', 'edit')->name('editConducteur');
    Route::post('/conducteur/conducteur/{id}', 'update')->name('modifierCoducteur');
    Route::delete('/conducteur/conducteur/{id}','destroy')->name('supprimerConducteur');
});


//route trajets
Route::controller(TrajetsController::class)->group(function(){
    Route::get('/trajet/trajet', 'index')->name('trajet');
    Route::get('/trajet/ajout_trajet', 'create');
    Route::post('/trajet/trajet', 'store')->name('ajoutTrajet');
    Route::get('/trajet/modifier_trajet/{id}', 'edit')->name('editTrajet');
    Route::post('/trajet/trajet/{id}', 'update')->name('modifTrajet');
    Route::delete('/trajet/trajet/{id}','destroy')->name('supTrajet');
});

//route depense
Route::controller(DepensesController::class)->group(function(){
    Route::get('/depense/depense','index')->name('depense');
     Route::get('/depense/ajout_depense','create');
     Route::post('/depense/depense', 'store')->name('ajourDepenses');
     Route::get('/depense/modifier_depense/{id}', 'edit')->name('editDepense');
    Route::post('/depense/depense/{id}', 'update')->name('modifierDepense');
    Route::delete('/depense/depense/{id}','destroy')->name('supDepense');
});

//route voyageur
Route::controller(VoyageursController::class)->group(function(){
    Route::get('/voyageur/voyageur','index')->name('voyageur');
     Route::get('/voyageur/ajout_voyageur','create');
     Route::post('/voyageur/voyageur', 'store')->name('ajoutVoyageur');
     Route::get('/voyageur/modifier_voyageur/{id}', 'edit')->name('editVoyageur');
    Route::post('/voyageur/voyageur/{id}', 'update')->name('modifierVoyageur');
    Route::delete('/voyageur/voyageur/{id}','destroy')->name('supVoyageur');
});
//route voyage
Route::controller(VoyageController::class)->group(function(){
    Route::get('/voyage/voyage','index')->name('voyage');
     Route::get('/voyage/ajout_voyage','create');
    Route::post('/voyage/voyage', 'store')->name('ajoutVoyage');
    Route::get('/voyage/modifier_voyage/{id}', 'edit')->name('editVoyage');
    Route::post('/voyage/voyage/{id}', 'update')->name('modifierVoyage');
    Route::delete('/voyage/voyage/{id}','destroy')->name('supprimerVoyage');
});
//route billet

Route::controller(BilletsController::class)->group(function(){
    Route::get('/billet/billet','index')->name('billet');
     Route::get('/billet/ajout_billet','create');
    // // Route::post('/vehicule/vehicule', 'store')->name('store');
    Route::get('/billet/modifier_billet', 'edit')->name('editBillet');
    // Route::post('/categor/categorie/{id}', 'update')->name('updateCategorie');
    // Route::delete('/pages/categor/categorie/{id}','destroy')->name('destroy');
});
Route::controller(ChartController::class)->group(function(){
    Route::get('/acceuil/index','index')->middleware(['auth', 'verified']);
});

// // Route user
// Auth::routes();

// Route::middleware('auth', 'user-role:user')->group(function () {
//     Route::get('/home', [HomeController::class, 'userHome'])->name('home');
// });

// // Route admin
// Route::middleware('auth', 'user-role:admin')->group(function () {
//     Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('adminHome');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
require __DIR__.'/auth.php';


////route  chaque utilisateur
//
// Route::middleware('role:admin')->prefix('/admin')->group(function () {
//     // Routes accessibles uniquement par les admins
//     // Exemple : toutes les pages sauf /acceuil/index
//     Route::get('/', function () {
//         // Code
//     })->name('admin.dashboard'); // Nom de route pour une référence facile

//     // Autres routes admin...
//     Route::get('/users', [UserController::class, 'index'])->name('admin.users');
//     Route::get('/products', [ProductController::class, 'index'])->name('admin.products');
//     // ...
// });
Route::middleware([
    'auth.sanctum',
    Config('jetstream.auth_session'),
    'verified'
])->group(function(){
    Route::get('/dashboard}', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/dashboard',[AdminController::class,'index']);
