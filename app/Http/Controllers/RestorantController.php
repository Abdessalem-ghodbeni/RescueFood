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

    public function getAllRestorant()
    {
        $restaurants = Auth::user()->restaurants;
        return view('restorant.listeRestaurant', compact('restaurants'));
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

        return redirect()->route('restorant.index')->with('success', 'Restaurant créé avec succès.');
    }
}
