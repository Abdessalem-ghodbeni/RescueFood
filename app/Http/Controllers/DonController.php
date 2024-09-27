<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Don;
use App\Models\Association;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;

class DonController extends Controller
{
    public function index()
    {
        $dons = Don::all();
        return view('admin.dons.index', compact('dons'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        $associations = Association::all();
        $restaurants = Restaurant::all();
        return view('admin.dons.create', compact('associations', 'restaurants'));
    }

    // Enregistrer un nouveau don
   // Enregistrer un nouveau don
   public function store(Request $request)
   {
       $don = new Don();
       $don->description = $request->description;
       $don->date_don = $request->date;

       if ($request->association_id) {
           $don->association_id = $request->association_id;
       } else {
           $don->restaurant_id = $request->restaurant_id;
       }

       $don->save();

       return redirect()->route('dons.index')->with('success', 'Don créé avec succès !');
   }

     // Afficher le formulaire d'édition
     public function edit($id)
     {
         $don = Don::find($id);
         $associations = Association::all();
         $restaurants = Restaurant::all();
         return view('admin.dons.edit', compact('don', 'associations', 'restaurants'));
     }
 
     // Mettre à jour un don existant
     public function update(Request $request, $id)
     {
         $don = Don::find($id);
         $don->description = $request->description;
         $don->date_don = $request->date;
 
         // Réinitialiser l'association ou le restaurant
         $don->association_id = null;
         $don->restaurant_id = null;
 
         if ($request->association_id) {
             $don->association_id = $request->association_id;
         } else {
             $don->restaurant_id = $request->restaurant_id;
         }
 
         $don->save();
 
         return redirect()->route('dons.index')->with('success', 'Don modifié avec succès !');
     }

    // Supprimer un don
    public function destroy($id)
    {
        $don = Don::find($id);
        $don->delete();

        return redirect()->route('dons.index')->with('success', 'Don supprimé avec succès !');
    }

    public function classementDonsParRestaurant()
    {
        // Retrieve the ranking of donations by restaurant
         $classement = Don::with('restaurant')
         ->select('restaurant_id', DB::raw('count(*) as total_dons'))
         ->groupBy('restaurant_id')
         ->orderBy('total_dons', 'desc')
         ->with('restaurant') // This will load the restaurant relationship
         ->get();

         \Log::info('Classement:', $classement->toArray());

        // Pass the $classement variable to the welcome view
        return view('welcome', compact('classement'));
    }
}
