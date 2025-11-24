@extends('layout')

@section('content')
<div class="page-header">
    <h2>Frota de Veículos</h2>
    <a href="{{ route('vehicles.create') }}" class="btn btn-primary">+ Novo Veículo</a>
</div>

<form action="{{ route('vehicles.index') }}" method="GET" class="search-bar" style="margin-bottom: 20px;">
    <input type="text" name="search" class="form-control" placeholder="Buscar por Placa ou Modelo...">
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>

<table class="data-table">
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Placa</th>
            <th>Ano</th>
            <th>Proprietário</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->brand }} {{ $vehicle->model }}</td>
            <td>{{ $vehicle->plate }}</td>
            <td>{{ $vehicle->year }}</td>
            <td>{{ $vehicle->client->name ?? 'Sem dono' }}</td>
            <td>
                <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-edit">Editar</a>
                <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Excluir este veículo?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection