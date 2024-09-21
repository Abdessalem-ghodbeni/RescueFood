<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Categorie;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    // Display a listing of associations
    public function index()
    {
        // Fetch associations for the currently authenticated user
        $user_id = auth()->id();
        $associations = Association::where('user_id', $user_id)->get();

        // If you also need categories, make sure to include them
        $categories = Categorie::all();

        return view('association.associationDashboard', compact('associations', 'categories'));
    }
    public function create()
    {
        $categories = Categorie::all();
        return view('association.create', compact('categories'));
    }

    // Store a newly created association in storage (if applicable)
    public function store(Request $request)
    {
        // Validate input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:associations,email',
            'numero_telphone' => 'required|string|max:20',
            'adresse' => 'required|string|max:255',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        // Create new association
        Association::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'numero_telphone' => $validated['numero_telphone'],
            'adresse' => $validated['adresse'],
            'user_id' => auth()->id(), // Assuming the logged-in user creates the association
            'categorie_id' => $validated['categorie_id'], // Add a default or dynamic category ID
        ]);

        // Redirect or respond after saving
        return redirect()->route('association.index')->with('success', 'Association created successfully!');
    }


    // Display the specified association
    public function show(Association $association)
    {
        return view('association.show', compact('association'));
    }

    // Show the form for editing the specified association
    public function edit(Association $association)
    {
        return view('association.edit', compact('association'));
    }

    // Update the specified association in storage
    public function update(Request $request, Association $association)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $association->update($request->all());
        return redirect()->route('associations.index')
            ->with('success', 'Association updated successfully.');
    }

    // Remove the specified association from storage
    public function destroy(Association $association)
    {
        $association->delete();
        return redirect()->route('associations.index')
            ->with('success', 'Association deleted successfully.');
    }
}
