<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donataire;
use App\Models\Don;

class DonataireController extends Controller
{
     /**
     * Affiche la liste des donataires.
     */
    public function index()
    {
        $donataires = Donataire::with('don')->get(); // Récupérer les donataires avec leur don associé
        return view('admin.donataires.index', compact('donataires'));
    }

    /**
     * Affiche le formulaire pour créer un nouveau donataire.
     */
    public function create()
    {
        $dons = Don::all(); // Récupérer tous les dons disponibles
        return view('admin.donataires.create', compact('dons'));
    }

    /**
     * Enregistre un nouveau donataire dans la base de données.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'adresse' => 'required|string',
        'don_id' => 'nullable|exists:dons,id', // Assurer que le don_id correspond à un don existant
    ]);

    // Créer un nouveau donataire avec les données validées
    Donataire::create($validatedData);

        return redirect()->route('donataires.index')->with('success', 'Donataire créé avec succès.');
    }

    /**
     * Affiche le formulaire pour modifier un donataire.
     */
    public function edit(Donataire $donataire)
    {
        $dons = Don::all();
        return view('admin.donataires.edit', compact('donataire', 'dons'));
    }

    /**
     * Met à jour les informations d'un donataire existant.
     */
    public function update(Request $request, Donataire $donataire)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'adresse' => 'required|string',
            'don_id' => 'nullable|exists:dons,id', // Vérifie que le don_id existe
        ]);
    
        // Mettre à jour le donataire avec les nouvelles données
        $donataire->update($validatedData);
    
        return redirect()->route('donataires.index')->with('success', 'Donataire mis à jour avec succès.');
    }

    /**
     * Supprime un donataire.
     */
    public function destroy(Donataire $donataire)
    {
        $donataire->delete();

        return redirect()->route('donataires.index')->with('success', 'Donataire supprimé avec succès.');
    }
}
