@extends('layout')

@section('content')
<div class="page-header">
    <h2>Clientes</h2>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">+ Novo Cliente</a>
</div>

<form action="{{ url('/clients') }}" method="GET" class="search-bar" style="margin-bottom: 20px;">
    <input type="text" name="search" class="form-control" placeholder="Buscar Cliente por Nome ou CPF...">
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>

<table class="data-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{ $client->name }}</td>
            <td>{{ $client->cpf }}</td>
            <td>{{ $client->phone }}</td>
            <td>{{ $client->address }}</td>
            <td>
                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-edit">Editar</a>
                
                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection