<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
    // homeController nao passa dados,
    // apenas retorna a home com os atalhos
    return view('home.index');
    }
}
