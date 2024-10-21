<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Stock;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::with('stock')->get();
        return view('produit.produitDashboard')->with('produits', $produits);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stocks = Stock::all();
        return view('produit.create', compact('stocks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     Produit::create($input);
    //     return redirect('produit')->with('flash_message', 'Produit Addedd!');  
    // }

    public function store(Request $request)
    {
        $request->validate([
            'nom_produit' => 'required|string|min:3',
            'type' => 'required|string|min:3',
            'date_expiration' => 'nullable|date|after:today',
            'stock_id' => 'required|exists:stocks,id',
        ]);

        Produit::create($request->all());
        return redirect('produit')->with('success', 'Stock ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produit = Produit::find($id);
        $stock = $produit->stock;
        return view('produit.show', compact('produit', 'stock'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $produit = Produit::find($id);
        $stocks = Stock::all();
        return view('produit.edit', compact('produit', 'stocks'));
    }
    /**
     * Update the specified resource in storage.
     */
    //  public function update(Request $request, $id)
    //  {
    //      $produit = Produit::find($id);
    //      $input = $request->all();
    //      $produit->update($input);
    //      return redirect('produit')->with('flash_message', 'Produit Updated!');  
    //  }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_produit' => 'required|string|min:3',
            'type' => 'required|string|min:3',
            'date_expiration' => 'nullable|date|after:today',
            'stock_id' => 'required|exists:stocks,id',
        ]);
        $produit = Produit::findOrFail($id);
        $produit->update($request->all());
        return redirect('produit')->with('flash_message', 'Produit Updated!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produit::destroy($id);
        return redirect('produit')->with('flash_message', 'Produit deleted!');
    }
}
