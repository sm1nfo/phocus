@extends('layout')

@section('content')
<div class="page-header">
    <h2>Editar Veículo</h2>
</div>

<form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
    @csrf @method('PUT')
    
    <div class="form-group">
        <label class="form-label">Cliente (Dono)</label>
        <select name="client_id" class="form-control" required>
            @foreach($clients as $client)
                <option value="{{ $client->id }}" {{ $vehicle->client_id == $client->id ? 'selected' : '' }}>
                    {{ $client->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-grid">
        <div class="form-group">
            <label class="form-label">Marca</label>
            <input type="text" name="brand" value="{{ $vehicle->brand }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="form-label">Modelo</label>
            <input type="text" name="model" value="{{ $vehicle->model }}" class="form-control" required>
        </div>
    </div>

    <div class="form-grid">
        <div class="form-group">
            <label class="form-label">Placa</label>
            <input type="text" name="plate" value="{{ $vehicle->plate }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="form-label">Ano</label>
            <input type="number" name="year" value="{{ $vehicle->year }}" class="form-control" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
</form>
@endsection