<?php

namespace App\Http\Controllers;

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


        $restaurants = Restaurant::where('Restorant', 'like', '%' . $query . '%')->get();

        $totalRestaurants = $this->getTotalRestaurants();
        return view('admin.totalListeRestorant', compact('restaurants', 'totalRestaurants'));
    }
}
