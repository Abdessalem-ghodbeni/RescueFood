<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = Stock::with('restaurant')->get(); // Charger la relation restaurant

        return view('stock.stockDashboard')->with('stocks', $stocks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurants = Restaurant::all();

        return view('stock.create', compact('restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     Stock::create($input);
    //     return redirect('stock')->with('flash_message', 'Stock Addedd!');
    // }
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|string|min:3',
            'type' => 'required|string|min:3',
            'description' => '',
            'restaurant_id' => 'required|exists:restaurants,id',
        ]);

        Stock::create($request->all());

        return redirect()->route('stock.index')->with('success', 'Stock ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stock = Stock::find($id);
        $restaurant = $stock->restaurant; // Assurez-vous que cette relation est définie dans le modèle Stock

        return view('stock.show', compact('stock', 'restaurant'));
    }

    public function edit(string $id)
    {
        $stock = Stock::find($id);
        $restaurants = Restaurant::all();

        return view('stock.edit', compact('stock', 'restaurants'));
    }

    // public function update(Request $request, $id)
    // {
    //     $stock = Stock::find($id);
    //     $input = $request->all();
    //     $stock->update($input);
    //     return redirect('stock')->with('flash_message', 'Stock Updated!');
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|min:3',
            'type' => 'required|string|min:3',
            'description' => 'nullable|string',
            'restaurant_id' => 'required|exists:restaurants,id',
        ]);

        $stock = Stock::findOrFail($id);
        $stock->update($request->all());

        return redirect()->route('stock.index')->with('success', 'Stock modifié avec succès.');
    }

    public function destroy(string $id)
    {
        Stock::destroy($id);

        return redirect('stock')->with('flash_message', 'Stock deleted!');
    }
}
