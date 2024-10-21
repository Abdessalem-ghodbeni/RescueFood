<?php

namespace App\Http\Controllers;


use App\Models\Livraison; // Ajoutez ceci pour utiliser le modèle Livraison
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LivreurController extends Controller
{
    public function index()
    {
        // Récupérer l'utilisateur actuellement connecté (livreur)
        $livreur = Auth::user();

        // Récupérer les livraisons associées à ce livreur
        $livraisons = $livreur->livraisons;

        // Passer les livraisons à la vue
        return view('fournisseur\founisseurDashboard', compact('livraisons'));
    }


    public function updateEtat(Request $request, $id)
    {
        // Récupérer la livraison par ID
        $livraison = Livraison::findOrFail($id);

        // Valider que l'état est soit "livrée" soit "en attente"
        $request->validate([
            'etat' => 'required|in:livrée,en attente',
        ]);

        // Mettre à jour l'état de la livraison
        $livraison->etat = $request->etat;
        $livraison->save();

        // Si la livraison est marquée comme "livrée", met à jour le produit associé
        if ($request->etat === 'livrée') {
            $produit = $livraison->produit; // Accède au produit lié à la livraison
            if ($produit) {
                $produit->livre = true; // Met à jour l'attribut 'livre' du produit
                $produit->save();
            }
        }

        // Rediriger vers le tableau de bord du livreur avec un message de succès
        return redirect()->route('fournisseur.fournisseurDashboard')->with('success', 'État de la livraison mis à jour avec succès.');
    }
}
