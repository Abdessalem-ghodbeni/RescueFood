<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.adminDashboard');
    }

    public function getTotalRestaurants()
    {

        return Restaurant::count();
    }

    public function getAllRestorant()
    {

        $totalRestaurants = $this->getTotalRestaurants();
        $restaurants = Restaurant::all();

        return view('admin.totalListeRestorant', compact('restaurants', 'totalRestaurants'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $restaurants = Restaurant::where('Restorant', 'like', '%'.$query.'%')->get();

        $totalRestaurants = $this->getTotalRestaurants();

        return view('admin.totalListeRestorant', compact('restaurants', 'totalRestaurants'));
    }

    public function destroy($id)
    {

        $restaurant = Restaurant::findOrFail($id);

        $restaurant->delete();

        return redirect()->route('admin.getAllRestorant')->with('success', 'Restaurant supprimé avec succès.');
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);

        if (! $restaurant) {
            return redirect()->back()->with('error', 'Restaurant non trouvé');
        }

        return view('admin.detailsResorantAdmin')->with('restaurant', $restaurant);
    }

    public function allMenu()
    {

        $menus = Menu::with('restaurant')->get();

        return view('admin.totaleMenuList', compact('menus'));
    }

    public function showMenu($id)
    {

        $menu = Menu::findOrFail($id);

        return view('admin.adminMenu', compact('menu'));
    }

    public function destroyMenu($id)
    {

        $menu = Menu::findOrFail($id);

        $menu->delete();

        return redirect()->route('admin.allMenu')->with('success', 'Menu supprimé avec succès.');
    }
}
