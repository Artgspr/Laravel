<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    public function run() { // ex insere um adm no
    $dados=['name'=>"Tiago", 'email'=>"admin@email",'password'=>bcrypt("123")];
    User::create($dados);
}
}