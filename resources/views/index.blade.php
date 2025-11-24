@extends('layout')

@section('content')
<div class="page-header">
    <h2>Gerenciar Clientes</h2>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">+ Novo Cliente</a>
</div>

<form method="GET" action="{{ route('clients.index') }}" class="search-bar" style="margin-bottom: 20px;">
    <input type="text" name="search" class="form-control" placeholder="Buscar por nome ou CPF...">
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>

<table class="data-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{ $client->name }}</td>
            <td>{{ $client->cpf }}</td>
            <td>{{ $client->phone }}</td>
            <td>
                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-edit">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection