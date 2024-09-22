<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


        $restaurants = Restaurant::where('Restorant', 'like', '%' . $query . '%')->get();

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

        if (!$restaurant) {
            return redirect()->back()->with('error', 'Restaurant non trouvé');
        }

        return view('admin.detailsResorantAdmin')->with('restaurant', $restaurant);
    }
}
