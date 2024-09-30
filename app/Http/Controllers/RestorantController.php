<?php

namespace App\Http\Controllers;

class RestorantController extends Controller
{
    public function index()
    {
        return view('restorant.restorantDashboard');
    }
}
