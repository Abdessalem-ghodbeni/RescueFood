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

            return redirect()->route('menus.user')
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


    public function edit($id)
    {

        $menu = Menu::findOrFail($id);


        if ($menu->user_id !== auth()->id()) {
            return redirect()->route('menus.index')->withErrors('Vous n\'avez pas les droits pour modifier ce menu.');
        }


        $restaurants = auth()->user()->restaurants;


        return view('restorant.edit_menu', compact('menu', 'restaurants'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nom_plat' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'description' => 'nullable|string',
            'restaurant_id' => 'required|exists:restaurants,id',
        ]);

        try {

            $menu = Menu::findOrFail($id);


            if ($menu->user_id !== auth()->id()) {
                return redirect()->route('menus.index')->withErrors('Vous n\'avez pas les droits pour modifier ce menu.');
            }


            $menu->nom_plat = $request->input('nom_plat');
            $menu->prix = $request->input('prix');
            $menu->description = $request->input('description');
            $menu->restaurant_id = $request->input('restaurant_id');
            $menu->save();


            return redirect()->route('menus/user')->with('success', 'Menu mis à jour avec succès !');
        } catch (\Exception $e) {
            return redirect()->route('menus.user')->with('success', 'Menu mis à jour avec succès !');
        }
    }
    public function destroy($id)
    {

        $menu = Menu::findOrFail($id);


        if ($menu->user_id !== auth()->id()) {
            return redirect()->route('menus.index')->withErrors('Vous n\'avez pas les droits pour supprimer ce menu.');
        }


        $menu->delete();


        return redirect()->route('menus.user')->with('success', 'Menu supprimé avec succès.');
    }

    public function show($id)
    {

        $menu = Menu::findOrFail($id);


        if ($menu->user_id !== auth()->id()) {
            return redirect()->route('menu.user')->withErrors('Vous n\'avez pas les droits pour voir ce menu.');
        }
        return view('restorant.details_menu', compact('menu'));
    }
}
