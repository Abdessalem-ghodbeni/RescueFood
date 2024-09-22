<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    // Display all categories
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categorie.index', compact('categories'));
    }

    // Show the form to create a new category
    public function create()
    {
        return view('admin.categorie.create');
    }

    // Store a newly created category
    public function store(Request $request)
    {
        $request->validate([
            'type_categorie' => 'required|string|max:255',
        ]);

        Categorie::create([
            'type_categorie' => $request->input('type_categorie'),
        ]);

        return redirect()->route('categorie.index')->with('success', 'Category created successfully!');
    }

    // Show the form to edit an existing category
    public function edit($id)
    {
        $category = Categorie::findOrFail($id);
        return view('admin.categorie.edit', compact('category'));
    }

    // Update an existing category
    public function update(Request $request, $id)
    {
        $request->validate([
            'type_categorie' => 'required|string|max:255',
        ]);

        $category = Categorie::findOrFail($id);
        $category->update([
            'type_categorie' => $request->input('type_categorie'),
        ]);

        return redirect()->route('categorie.index')->with('success', 'Category updated successfully!');
    }

    // Delete a category
    public function destroy($id)
    {
        $category = Categorie::findOrFail($id);
        $category->delete();

        return redirect()->route('categorie.index')->with('success', 'Category deleted successfully!');
    }
}
