<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phocus Seguros</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar" style="border-bottom: 1px solid #555;">
        <div class="logo-container">
            <img src="{{ asset('img/logo.svg') }}" class="logo-img" alt="Logo">
            <a href="/" style="color: white; text-decoration: none;">Phocus Seguros</a>
        </div>
        <div style="display: flex; gap: 20px;">
            <a href="{{ route('clients.index') }}" class="btn" style="color: white;">Clientes</a>
            <a href="{{ route('vehicles.index') }}" class="btn" style="color: white;">Veículos</a>
        </div>
    </nav>

    <div class="container">
        @if ($errors->any())
            <div style="background-color: #ff6b6b; color: white; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>