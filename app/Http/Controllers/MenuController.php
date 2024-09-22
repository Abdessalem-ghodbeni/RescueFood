<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create()
    {

        $restaurants = auth()->user()->restaurants;

        return view('restorant.ajouter_menu', compact('restaurants'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom_plat' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'description' => 'nullable|string',
            'restaurant_id' => 'required|exists:restaurants,id',
        ]);

        try {

            $menu = new Menu($request->all());
            $menu->user_id = auth()->id(); // n'affecti menu lil user
            $menu->save();

            return redirect()->route('restorant.show', $request->restaurant_id)
                ->with('success', 'Menu ajouté avec succès !');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Erreur lors de l\'ajout du menu.']);
        }
    }


    public function userMenus()
    {

        $menus = Menu::with('restaurant')
            ->where('user_id', auth()->id())
            ->get();

        return view('restorant.liste_menus', compact('menus'));
    }
}
