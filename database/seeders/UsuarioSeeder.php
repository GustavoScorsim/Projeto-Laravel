<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        // Inserindo 4 registros na tabela usuarios
        Usuario::create([
            'nome' => 'Leandro',
            'email' => 'leandro@example.com',
            'idade' => 26,
        ]);

        Usuario::create([
            'nome' => 'Ana Souza',
            'email' => 'ana@example.com',
            'idade' => 25,
        ]);

        Usuario::create([
            'nome' => 'Pedro Santos',
            'email' => 'pedro@example.com',
            'idade' => 28,
        ]);

        Usuario::create([
            'nome' => 'João Silva',
            'email' => 'joao@example.com',
            'idade' => 30,
        ]);
    }
}
