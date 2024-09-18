<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestorantController extends Controller
{
    public function index()
    {
        return view('restorant.restorantDashboard');
    }
}
