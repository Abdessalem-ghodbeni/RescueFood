<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Termwind\render;

class LivreurController extends Controller
{
    public function index()
    {
        return view('fournisseur.founisseurDashboard');
    }
}
