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


    // public function store(Request $request)
    // {
    //     // Valider les données du formulaire
    //     $request->validate([
    //         'destination' => 'required',
    //         'numero_livraison' => 'required|unique:livraisons,numero_livraison', // Assurez-vous que le numero_livraison est unique
    //         'date_de_livraison' => 'required|date',
    //         'trajet_id' => 'required|exists:trajets,id',
    //         'user_id' => 'required|exists:users,id',
    //         'produit_id' => 'required|exists:produits,id'
    //     ]);

    //     // Créer la nouvelle livraison
    //     $livraison = Livraison::create([
    //         'destination' => $request->input('destination'),
    //         'numero_livraison' => $request->input('numero_livraison'),
    //         'date_de_livraison' => $request->input('date_de_livraison'),
    //         'trajet_id' => $request->input('trajet_id'),
    //         'user_id' => $request->input('user_id'),
    //         'produit_id' => $request->input('produit_id'),
    //         'etat' => 'en attente', // État par défaut
    //     ]);

    //     return redirect()->route('livraisons.index')->with('success', 'Livraison créée avec succès.');
    // }


    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'destination' => 'required|string|max:4',
            'numero_livraison' => 'required|string|unique:livraisons,numero_livraison|max:100',
            'date_de_livraison' => 'required|date|after:today',
            'trajet_id' => 'required|exists:trajets,id',
            'user_id' => 'required|exists:users,id',
            'produit_id' => 'required|exists:produits,id'
        ], [
            'destination.required' => 'Le champ destination est obligatoire.',
            'destination.string' => 'La destination doit être une chaîne de caractères.',
            'destination.max' => 'La destination ne peut pas dépasser 4 caractères.',
            'numero_livraison.required' => 'Le champ numéro de livraison est obligatoire.',
            'numero_livraison.string' => 'Le numéro de livraison doit être une chaîne de caractères.',
            'numero_livraison.unique' => 'Ce numéro de livraison est déjà utilisé.',
            'numero_livraison.max' => 'Le numéro de livraison ne peut pas dépasser 100 caractères.',
            'date_de_livraison.required' => 'La date de livraison est obligatoire.',
            'date_de_livraison.date' => 'Le format de la date de livraison est invalide.',
            'date_de_livraison.after' => 'La date de livraison doit être une date future.',
            'trajet_id.required' => 'Le champ trajet est obligatoire.',
            'user_id.required' => 'Le champ utilisateur est obligatoire.',
            'produit_id.required' => 'Le champ produit est obligatoire.'
        ]);

        try {
            // Créer la nouvelle livraison
            $livraison = Livraison::create([
                'destination' => $request->input('destination'),
                'numero_livraison' => $request->input('numero_livraison'),
                'date_de_livraison' => $request->input('date_de_livraison'),
                'trajet_id' => $request->input('trajet_id'),
                'user_id' => $request->input('user_id'),
                'produit_id' => $request->input('produit_id'),
                'etat' => 'en attente', // État par défaut
            ]);

            return redirect()->route('livraisons.index')->with('success', 'Livraison créée avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Une erreur est survenue lors de la création de la livraison.')->withInput();
        }
    }

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
        // Validation avec messages d'erreur personnalisés
        $request->validate([
            'date_de_livraison' => 'required|date',
            'destination' => 'required|string|max:4',
            'numero_livraison' => 'required|unique:livraisons,numero_livraison,' . $livraison->id,
            'user_id' => 'required|exists:users,id',
            'trajet_id' => 'required|exists:trajets,id',
            'produit_id' => 'required|exists:produits,id',
        ], [
            'date_de_livraison.required' => 'La date de livraison est obligatoire.',
            'date_de_livraison.date' => 'Le format de la date de livraison est invalide.',
            'destination.required' => 'La destination est obligatoire.',
            'destination.string' => 'La destination doit être une chaîne de caractères.',
            'destination.max' => 'La destination ne doit pas dépasser 4 caractères.',
            'numero_livraison.required' => 'Le numéro de livraison est obligatoire.',
            'numero_livraison.unique' => 'Le numéro de livraison doit être unique.',
            'user_id.required' => 'Le livreur est obligatoire.',
            'user_id.exists' => 'Le livreur sélectionné n\'existe pas.',
            'trajet_id.required' => 'Le trajet est obligatoire.',
            'trajet_id.exists' => 'Le trajet sélectionné n\'existe pas.',
            'produit_id.required' => 'Le produit est obligatoire.',
            'produit_id.exists' => 'Le produit sélectionné n\'existe pas.',
        ]);

        // Mettre à jour les informations de la livraison
        $livraison->update([
            'date_de_livraison' => $request->input('date_de_livraison'),
            'destination' => $request->input('destination'),
            'numero_livraison' => $request->input('numero_livraison'),
            'user_id' => $request->input('user_id'),
            'trajet_id' => $request->input('trajet_id'),
            'produit_id' => $request->input('produit_id'),
        ]);

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
