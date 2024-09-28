<?php

namespace App\Http\Controllers;

use App\Models\Livraison;
use App\Models\Trajet;
use App\Models\User;
use Illuminate\Http\Request;

class livraisonController extends Controller
{
    // Affiche la liste des livraisons
    public function index()
    {
        $livraisons = Livraison::with(['user', 'trajet'])->get();
        return view('livraisons.livraisonDashboard', compact('livraisons'));
    }

    // Affiche le formulaire de création
    public function create()
    {
        // Récupérer la liste des utilisateurs
        $users = User::all();

        // Récupérer la liste des trajets
        $trajets = Trajet::all();

        // Passer les utilisateurs et trajets à la vue
        return view('livraisons.create', compact('users', 'trajets'));
    }


    // Stocke une nouvelle livraison
    public function store(Request $request)
    {
        $request->validate([
            'destination' => 'required',
            'numero_livraison' => 'required',
            'date_de_livraison' => 'required|date',
            'trajet_id' => 'required|exists:trajets,id',
            'user_id' => 'required|exists:users,id', // Validation du user_id
        ]);

        // Créer une nouvelle livraison
        $livraison = new Livraison();
        $livraison->destination = $request->input('destination');
        $livraison->numero_livraison = $request->input('numero_livraison');
        $livraison->date_de_livraison = $request->input('date_de_livraison');
        $livraison->trajet_id = $request->input('trajet_id');
        $livraison->user_id = $request->input('user_id'); // Assigner le user_id
        $livraison->save();

        return redirect()->route('livraisons.index')->with('success', 'Livraison créée avec succès.');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'destination' => 'required',
    //         'numero_livraison' => 'required',
    //         'date_de_livraison' => 'required|date',
    //         'trajet_id' => 'required|exists:trajets,id',
    //     ]);

    //     // Créer une nouvelle livraison
    //     $livraison = new Livraison();
    //     $livraison->destination = $request->input('destination');
    //     $livraison->numero_livraison = $request->input('numero_livraison');
    //     $livraison->date_de_livraison = $request->input('date_de_livraison'); // Assigner la date
    //     $livraison->trajet_id = $request->input('trajet_id');
    //     $livraison->save();

    //     return redirect()->route('livraisons.index')->with('success', 'Livraison créée avec succès.');
    // }


    // Affiche une livraison spécifiquepublic function show(Livraison $livraison)
    public function show(Livraison $livraison)
    {
        return view('livraisons.show', compact('livraison'));
    }



    // Affiche le formulaire d'édition
    public function edit($id)
    {
        $livraison = Livraison::findOrFail($id);
        $users = User::all();
        $trajets = Trajet::all();
        return view('livraisons.edit', compact('livraison', 'users', 'trajets'));
    }

    // Met à jour une livraison existante
    public function update(Request $request, Livraison $livraison)
    {
        $request->validate([
            'date_de_livraison' => 'required|date',
            'destination' => 'required|string|max:255',
            'numero_livraison' => 'required|unique:livraisons,numero_livraison,' . $livraison->id,
            'user_id' => 'required|exists:users,id',
            'trajet_id' => 'required|exists:trajets,id',
        ]);

        $livraison->update($request->all());

        return redirect()->route('livraisons.index')->with('success', 'Livraison mise à jour avec succès.');
    }

    // Supprime une livraison
    public function destroy($id)
    {
        $livraison = Livraison::find($id);

        if ($livraison) {
            $livraison->delete();
            return redirect()->route('livraisons.index')->with('success', 'Livraison supprimée avec succès.');
        }

        return redirect()->route('livraisons.index')->with('error', 'Livraison non trouvée.');
    }
}
