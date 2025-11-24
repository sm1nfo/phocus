@extends('layout')

@section('content')
<div class="page-header">
    <h2>Cadastrar Veículo</h2>
</div>

<form action="{{ route('vehicles.store') }}" method="POST">
    @csrf
    
    <div class="form-group">
        <label class="form-label">Cliente Proprietário</label>
        <select name="client_id" class="form-control" required>
            <option value="">Selecione um cliente...</option>
            @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }} - {{ $client->cpf }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label class="form-label">Marca e Modelo</label>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <input type="text" name="brand" class="form-control" placeholder="Marca (ex: Honda)" required>
            <input type="text" name="model" class="form-control" placeholder="Modelo (ex: Civic)" required>
        </div>
    </div>

    <div class="form-group">
        <label class="form-label">Placa e Ano</label>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <input type="text" name="plate" class="form-control" placeholder="ABC-1234" required>
            <input type="number" name="year" class="form-control" placeholder="2024" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Veículo</button>
</form>
@endsection