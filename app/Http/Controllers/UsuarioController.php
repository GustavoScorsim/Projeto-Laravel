<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'idade' => 'required|integer|min:1|max:120',
            'rua' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
        ]);
    
        $usuario = Usuario::create($request->only(['nome', 'email', 'idade']));
    
        Endereco::create([
            'usuario_id' => $usuario->id,
            'rua' => $request->rua,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
        ]);
    
        return redirect()->back()->with('success', 'Usuário e endereço cadastrados com sucesso!');
    }
    

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
    
        return redirect()->back()->with('success', 'Usuário excluído com sucesso!');
    }
    


// Exibe o formulário de edição
public function edit($id)
{
    $usuario = Usuario::findOrFail($id);
    return view('usuarios.create', compact('usuario'));
}


// Atualiza os dados no banco
public function update(Request $request, $id)
{
    $usuario = Usuario::findOrFail($id);

    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email',
        'idade' => 'required|integer',
    ]);

    $usuario->update($request->all());

    return redirect()->route('tabela')->with('success', 'Usuário atualizado com sucesso!');
}



}
