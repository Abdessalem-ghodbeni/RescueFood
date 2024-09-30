<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Http\Request;

class TrajetController extends Controller
{
    public function index()
    {
        $trajets = Trajet::all();

        return view('trajets.trajetDashboard', compact('trajets'));
    }

    public function create()
    {
        return view('trajets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'point_depart' => 'required|string|max:255',
            'point_arrive' => 'required|string|max:255',
            'duree' => 'required|integer',
        ]);

        Trajet::create($request->all());

        return redirect()->route('trajets.index')->with('success', 'Trajet créé avec succès.');
    }

    public function show(Trajet $trajet)
    {
        return view('trajets.show', compact('trajet'));
    }

    public function edit(Trajet $trajet)
    {
        return view('trajets.edit', compact('trajet'));
    }

    public function update(Request $request, Trajet $trajet)
    {
        $request->validate([
            'point_depart' => 'required|string|max:255',
            'point_arrive' => 'required|string|max:255',
            'duree' => 'required|integer',
        ]);

        $trajet->update($request->all());

        return redirect()->route('trajets.index')->with('success', 'Trajet mis à jour avec succès.');
    }

    public function destroy(Trajet $trajet)
    {
        $trajet->delete();

        return redirect()->route('trajets.index')->with('success', 'Trajet supprimé avec succès.');
    }
}
