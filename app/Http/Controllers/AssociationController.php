<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Categorie;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    public function afficher()
    {
        $user_id = auth()->id();
        $associations = Association::where('user_id', $user_id)->get();
        $categories = Categorie::all();

        return view('association.afficher', compact('associations', 'categories'));
    }

    public function afficherAll()
    {
        $associations = Association::all();

        return view('admin.association.afficherAll', compact('associations'));
    }

    public function create()
    {
        $categories = Categorie::all();

        return view('association.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:associations,email',
            'numero_telphone' => 'required|string|max:20',
            'adresse' => 'required|string|max:255',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        Association::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'numero_telphone' => $validated['numero_telphone'],
            'adresse' => $validated['adresse'],
            'user_id' => auth()->id(),
            'categorie_id' => $validated['categorie_id'],
        ]);

        return redirect()->route('association.afficher', ['user_id' => auth()->id()])->with('success', 'Association created successfully!');
    }

    public function edit($id)
    {
        $association = Association::findOrFail($id);
        $categories = Categorie::all();

        return view('association.edit', compact('association', 'categories'));
    }

    public function editAll($id)
    {
        $association = Association::findOrFail($id);
        $categories = Categorie::all();

        return view('admin.association.editAll', compact('association', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'numero_telphone' => 'required|string|max:15',
            'adresse' => 'required|string|max:255',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        $association = Association::findOrFail($id);
        $association->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'numero_telphone' => $request->input('numero_telphone'),
            'adresse' => $request->input('adresse'),
            'categorie_id' => $request->input('categorie_id'),
        ]);

        return redirect()->route('association.afficher', ['user_id' => auth()->id()])->with('success', 'Association updated successfully!');
    }

    public function updateAll(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'numero_telphone' => 'required|string|max:15',
            'adresse' => 'required|string|max:255',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        $association = Association::findOrFail($id);
        $association->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'numero_telphone' => $request->input('numero_telphone'),
            'adresse' => $request->input('adresse'),
            'categorie_id' => $request->input('categorie_id'),
        ]);

        return redirect()->route('association.afficherAll')->with('success', 'Association updated successfully!');
    }

    public function destroy($id)
    {
        $association = Association::findOrFail($id);
        $association->delete();

        return redirect()->route('association.afficher', ['user_id' => auth()->id()])->with('success', 'Association created successfully!');

    }

    public function destroyAll($id)
    {
        $association = Association::findOrFail($id);
        $association->delete();

        return redirect()->route('association.afficherAll')->with('success', 'Association created successfully!');

    }
}
