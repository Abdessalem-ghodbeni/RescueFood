<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestorantController extends Controller
{
    public function index()
    {
        return view('restorant.restorantDashboard');
    }
    public function getTotalRestaurants()
    {
        return Restaurant::count();
    }
    public function show($id)
    {
        $restaurant = Restaurant::find($id); // Assurez-vous d'utiliser $restaurant et non $retaurant

        if (!$restaurant) {
            return redirect()->back()->with('error', 'Restaurant non trouvé');
        }

        return view('restorant.restorantDetails')->with('restaurant', $restaurant); // Assurez-vous que c'est 'restaurant'
    }


    public function edit($id)
    {
        // Rechercher le restaurant par son id
        $restaurant = Restaurant::find($id);

        // Vérifier si le restaurant existe
        if (!$restaurant) {
            return redirect()->back()->with('error', 'Restaurant non trouvé');
        }

        // Retourner la vue avec les données du restaurant
        return view('restorant.edit', compact('restaurant'));
    }

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'Restorant' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'localisation' => 'required|string|max:255',
            'numero_fix' => 'required|string|max:15',
        ]);

        // Rechercher le restaurant par son id
        $restaurant = Restaurant::find($id);

        if (!$restaurant) {
            return redirect()->back()->with('error', 'Restaurant non trouvé');
        }

        // Mettre à jour les informations du restaurant
        $restaurant->Restorant = $request->Restorant;
        $restaurant->specialite = $request->specialite;
        $restaurant->localisation = $request->localisation;
        $restaurant->numero_fix = $request->numero_fix;
        $restaurant->save();

        // Rediriger avec un message de succès
        return redirect()->route('restorant.getAllRestorant')->with('success', 'Restaurant mis à jour avec succès');
    }


    public function getAllRestorant()
    {
        $restaurants = Auth::user()->restaurants;

        $totalRestaurants = $this->getTotalRestaurants();
        return view('restorant.listeRestaurant', compact('restaurants', 'totalRestaurants'));
    }



    public function create()
    {
        return view('restorant.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'Restorant' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'numero_fix' => 'required|string|max:20',
            'localisation' => 'required|string|max:255',
        ]);


        $restaurant = Restaurant::create([
            'Restorant' => $request->Restorant,
            'specialite' => $request->specialite,
            'numero_fix' => $request->numero_fix,
            'localisation' => $request->localisation,
            'user_id' => Auth::id(),
        ]);
        toastr()->success('votre resaurant est ajouté avec succées.');

        return redirect()->route('restorant.getAllRestorant')->with('success', 'Restaurant créé avec succès.');
    }

    public function destroy($id)
    {
        $restaurant = Restaurant::findOrFail($id);

        if ($restaurant->user_id !== Auth::id()) {
            return redirect()->route('restorant.index')->with('error', 'Vous ne pouvez pas supprimer ce restaurant.');
        }

        $restaurant->delete();

        return redirect()->route('restorant.getAllRestorant')->with('success', 'Restaurant supprimé avec succès.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Rechercher les restaurants par leur nom
        $restaurants = Restaurant::where('Restorant', 'like', '%' . $query . '%')->get();

        $totalRestaurants = $this->getTotalRestaurants();
        return view('restorant.listeRestaurant', compact('restaurants', 'totalRestaurants'));
    }
}
