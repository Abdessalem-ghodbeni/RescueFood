<?php

namespace App\Http\Controllers;

class LivreurController extends Controller
{
    public function index()
    {
        return view('fournisseur.founisseurDashboard');
    }
}
