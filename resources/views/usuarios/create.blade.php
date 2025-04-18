@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <h2>{{ isset($usuario) ? 'Editar Usuário' : 'Cadastro de Usuário' }}</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($usuario) ? route('usuarios.update', $usuario->id) : route('usuarios.store') }}" method="POST">
        @csrf
        @if(isset($usuario))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $usuario->nome ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $usuario->email ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="idade" class="form-label">Idade:</label>
            <input type="number" name="idade" id="idade" class="form-control" value="{{ old('idade', $usuario->idade ?? '') }}" required>
        </div>

        <h4 class="mt-4">Endereço</h4>

        <div class="mb-3">
            <label for="rua" class="form-label">Rua:</label>
            <input type="text" name="rua" id="rua" class="form-control" value="{{ old('rua', $usuario->endereco->rua ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="text" name="cidade" id="cidade" class="form-control" value="{{ old('cidade', $usuario->endereco->cidade ?? '') }}" required>
        </div>

        <div class="mb-3">
           <label for="estado" class="form-label">Estado:</label>
           <input type="text" name="estado" id="estado" class="form-control" value="{{ old('estado', $usuario->endereco->estado ?? '') }}" required>
        </div>


        <button type="submit" class="btn btn-primary">
            {{ isset($usuario) ? 'Atualizar' : 'Cadastrar' }}
        </button>
        <a href="{{ route('tabela') }}" class="btn btn-secondary">Cancelar</a>
    </form>

</div>
@endsection
