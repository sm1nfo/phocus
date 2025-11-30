<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Phocus</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body { display: flex; align-items: center; justify-content: center; min-height: 100vh; padding: 20px; }
        .form-box { background: var(--card-bg); padding: 40px; border-radius: 10px; width: 100%; max-width: 600px; }
        .success-msg { background: #cdef9f; color: #2f3e10; padding: 15px; border-radius: 4px; margin-bottom: 20px; text-align: center; font-weight: bold; }
        .error-list { background: #ff6b6b; color: white; padding: 15px; border-radius: 4px; margin-bottom: 20px; list-style: none; }
        
        /* Separador de Seção */
        .section-title {
            color: #cdef9f;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            padding-bottom: 5px;
            margin: 25px 0 15px 0;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="{{ asset('img/logo.svg') }}" style="height: 50px;" alt="Logo">
            <h2 style="color: white; margin-top: 10px;">Solicitar Cotação</h2>
            <p style="color: #ccc; font-size: 0.9rem;">Preencha seus dados e do veículo</p>
        </div>

        @if(session('success'))
            <div class="success-msg">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('public.store') }}" method="POST">
            @csrf
            
            <div class="section-title">Dados Pessoais</div>

            <div class="form-group">
                <label class="form-label">Nome Completo *</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label class="form-label">Telefone / WhatsApp *</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
                </div>
                <div class="form-group">
                    <label class="form-label">CPF (Opcional)</label>
                    <input type="text" name="cpf" class="form-control" value="{{ old('cpf') }}">
                </div>
            </div>

            <div class="section-title">Dados do Veículo</div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label class="form-label">Placa do Veículo *</label>
                    <input type="text" name="plate" class="form-control" placeholder="ABC-1234" value="{{ old('plate') }}" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Ano</label>
                    <input type="number" name="year" class="form-control" placeholder="Ex: 2024" value="{{ old('year') }}">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label class="form-label">Marca</label>
                    <input type="text" name="brand" class="form-control" placeholder="Ex: Honda" value="{{ old('brand') }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Modelo</label>
                    <input type="text" name="model" class="form-control" placeholder="Ex: Civic" value="{{ old('model') }}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 30px; padding: 15px; font-size: 1.1rem;">
                Enviar Cadastro
            </button>
            
            <div style="text-align: center; margin-top: 20px;">
                <a href="{{ route('home') }}" style="color: #888; font-size: 0.8rem; text-decoration: none;">Voltar à Home</a>
            </div>
        </form>
    </div>
</body>
</html>