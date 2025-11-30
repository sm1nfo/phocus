@extends('layout')

@section('content')
<div class="page-header">
    <h2>Editar Cliente</h2>
</div>

<form action="{{ route('clients.update', $client->id) }}" method="POST">
    @csrf @method('PUT')
    
    <div class="form-group">
        <label class="form-label">Nome</label>
        <input type="text" name="name" value="{{ $client->name }}" class="form-control" required>
    </div>

    <div class="form-grid">
        <div class="form-group">
            <label class="form-label">CPF</label>
            <input type="text" name="cpf" value="{{ $client->cpf }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="form-label">Telefone</label>
            <input type="text" name="phone" value="{{ $client->phone }}" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label class="form-label">Endereço</label>
        <input type="text" name="address" value="{{ $client->address }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection