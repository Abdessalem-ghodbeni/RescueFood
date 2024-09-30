<?php

namespace App\Http\Controllers;

use App\Models\Don;

class HomeController extends Controller
{
    public function index()
    {
        $classement = Don::select('restaurant_id', \DB::raw('count(*) as total_dons'))
            ->groupBy('restaurant_id')
            ->with('restaurant') // Ensure the restaurant relationship is loaded
            ->get();

        // Optionally log the classement for debugging
        \Log::info('Classement:', $classement->toArray());

        return view('welcome', compact('classement'));
    }
}
