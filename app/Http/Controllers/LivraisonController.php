<?php

namespace App\Http\Controllers;

use App\Models\Livraison;
use App\Models\Trajet;
use App\Models\User;
use App\Models\Produit; // Assurez-vous que vous avez inclus le modèle Produit
use Illuminate\Http\Request;

class LivraisonController extends Controller
{
    // Affiche la liste des livraisons
    public function index()
    {
        $livraisons = Livraison::with(['user', 'trajet', 'produit'])->get(); // Inclure les relations produit
        return view('livraisons.livraisonDashboard', compact('livraisons'));
    }

    // Affiche le formulaire de création
    public function create()
    {
        // Récupérer tous les livreurs
        $livreurs = User::where('role', 'livreur')->get();
        $trajets = Trajet::all();
        $produits = Produit::all(); // Récupérer la liste des produits

        return view('livraisons.create', compact('livreurs', 'trajets', 'produits'));
    }

    // Stocke une nouvelle livraison
    public function store(Request $request)
    {
        $request->validate([
            'destination' => 'required',
            'numero_livraison' => 'required|unique:livraisons,numero_livraison', // Unicité du numéro de livraison
            'date_de_livraison' => 'required|date',
            'trajet_id' => 'required|exists:trajets,id',
            'user_id' => 'required|exists:users,id',
            'produit_id' => 'required|exists:produits,id', // Validation du produit
        ]);

        // Créer une nouvelle livraison avec l'état par défaut "en attente"
        Livraison::create([
            'destination' => $request->input('destination'),
            'numero_livraison' => $request->input('numero_livraison'),
            'date_de_livraison' => $request->input('date_de_livraison'),
            'trajet_id' => $request->input('trajet_id'),
            'user_id' => $request->input('user_id'),
            'produit_id' => $request->input('produit_id'),
            'etat' => 'en attente', // Etat par défaut
        ]);

        return redirect()->route('livraisons.index')->with('success', 'Livraison créée avec succès.');
    }

    // Affiche une livraison spécifique
    public function show(Livraison $livraison)
    {
        return view('livraisons.show', compact('livraison'));
    }

    // Affiche le formulaire d'édition
    public function edit($id)
    {
        $livraison = Livraison::findOrFail($id);
        $users = User::where('role', 'livreur')->get();
        $trajets = Trajet::all();
        $produits = Produit::all(); // Récupérer la liste des produits

        return view('livraisons.edit', compact('livraison', 'users', 'trajets', 'produits'));
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
            'produit_id' => 'required|exists:produits,id',
        ]);

        // Mettre à jour les informations de la livraison
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
    public function updateEtat(Request $request, $id)
    {
        // Récupérer la livraison par ID
        $livraison = Livraison::findOrFail($id);

        // Valider que l'état est soit "livrée" soit "en attente"
        $request->validate([
            'etat' => 'required|in:livrée,en attente',
        ]);

        // Mettre à jour l'état
        $livraison->etat = $request->etat;
        $livraison->save();

        return redirect()->route('livraisons.index')->with('success', 'État de la livraison mis à jour avec succès.');
    }
}