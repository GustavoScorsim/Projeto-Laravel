<!-- injetando html  -->
@extends('layouts.app')
@section('content')
<!-- injetando html  -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela em HTML</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Exemplo de Tabela</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>João Silva</td>
                <td>joao@example.com</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Ana Souza</td>
                <td>ana@example.com</td>
                <td>25</td>
            </tr>
            <tr>
                <td>Pedro Santos</td>
                <td>pedro@example.com</td>
                <td>28</td>
            </tr>
        </tbody>
    </table>

</body>
</html>

<!-- fim  injetando html  -->
@endsection
<!-- fim injetando html  -->
