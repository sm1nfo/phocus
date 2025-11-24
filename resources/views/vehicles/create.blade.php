@extends('layout')

@section('content')
<div class="page-header">
    <h2>Novo Veículo</h2>
    <a href="{{ route('vehicles.index') }}" class="btn btn-edit">Voltar</a>
</div>

<form action="{{ route('vehicles.store') }}" method="POST">
    @csrf
    
    <div class="form-group">
        <label class="form-label">Cliente (Dono)</label>
        <select name="client_id" class="form-control" required>
            <option value="">Selecione o cliente...</option>
            @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }} (CPF: {{ $client->cpf }})</option>
            @endforeach
        </select>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        <div class="form-group">
            <label class="form-label">Marca</label>
            <input type="text" name="brand" class="form-control" placeholder="Ex: Fiat" required>
        </div>
        <div class="form-group">
            <label class="form-label">Modelo</label>
            <input type="text" name="model" class="form-control" placeholder="Ex: Uno" required>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        <div class="form-group">
            <label class="form-label">Placa</label>
            <input type="text" name="plate" class="form-control" placeholder="ABC-1234" required>
        </div>
        <div class="form-group">
            <label class="form-label">Ano</label>
            <input type="number" name="year" class="form-control" placeholder="2023" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection