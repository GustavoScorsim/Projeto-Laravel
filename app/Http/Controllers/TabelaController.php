<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class TabelaController extends Controller
{
    public function exibirTabela(Request $request)
    {
        $totalUsuarios = Usuario::count();

        if ($request->has('nome')) {
            $dados = Usuario::with('endereco') // 👈 carrega o endereço
                ->where('nome', 'like', '%' . $request->nome . '%')
                ->get();
        } else {
            $dados = Usuario::with('endereco')->get(); // 👈 carrega o endereço
        }

        return view('tabela', compact('dados', 'totalUsuarios'));
    }
}
