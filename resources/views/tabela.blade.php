@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Usuários Cadastrados</h1>

    <!-- Exibir o total de usuários -->
    <p><strong>Total de usuários: </strong>{{ $totalUsuarios }}</p>

    <!-- Formulário de pesquisa -->
    <form action="{{ url('/tabela') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="nome" class="form-control" placeholder="Pesquisar por nome" value="{{ request()->input('nome') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Pesquisar</button>
            </div>
        </div>
    </form>

    <!-- Tabela para exibir os dados -->
    <table class="table table-bordered">
    <thead class="thead-light">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Idade</th>
        <th>Rua</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Ações</th>
    </tr>
</thead>
<tbody>
    @foreach($dados as $dado)
        <tr>
            <td>{{ $dado->nome }}</td>
            <td>{{ $dado->email }}</td>
            <td>{{ $dado->idade }}</td>
            <td>{{ $dado->endereco->rua ?? '-' }}</td>
            <td>{{ $dado->endereco->cidade ?? '-' }}</td>
            <td>{{ $dado->endereco->estado ?? '-' }}</td>
            <td>
                <a href="{{ route('usuarios.edit', $dado->id) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('usuarios.destroy', $dado->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

    </table>
</div>
@endsection
