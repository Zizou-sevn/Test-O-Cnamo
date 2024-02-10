<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MainController extends Controller
{
    public function accueil()
{
    return view('accueil');
}

public function menu()
{
    return view('menu');
}

public function reservation()
{
    return view('reservation');
}
}
