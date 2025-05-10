<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;

class contatoController extends Controller
{
    //
    public function index(Request $req){
        
        $nome = $req['nome'];
        $cel = $req['cel'];
        $contatos = [
            ['nome' => "$nome", 'cel' => "$cel" ]
        ];
        return view("contatos.index",
        compact('contatos'));   
    }
}


