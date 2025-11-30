<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phocus Seguros - Sistema</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="logo-container">
            <img src="{{ asset('img/logo.svg') }}" class="logo-img" alt="Logo">
            <span>Phocus Seguros</span>
        </div>
        </nav>

    <div class="hero" style="text-align: center; margin-top: 40px;">
        
        <h1 class="hero-title" style="font-size: 2.5rem; margin-bottom: 10px;">
            Painel de Controle
        </h1>
        <p class="hero-subtitle" style="margin-bottom: 50px;">
            Selecione o módulo que deseja gerenciar
        </p>

        <div class="cards-grid" style="max-width: 900px; margin: 0 auto;">
            
            <a href="{{ route('clients.index') }}" class="card" style="text-decoration: none; height: 250px;">
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="opacity: 0.8; width: 60px; height: 60px;">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="card-text" style="font-size: 1.5rem; margin-top: 15px;">Gerenciar Clientes</span>
                    <span style="color: #444; margin-top: 10px; font-size: 0.9rem;">Cadastrar, editar e listar clientes</span>
                </div>
            </a>

            <a href="{{ route('vehicles.index') }}" class="card" style="text-decoration: none; height: 250px;">
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="opacity: 0.8; width: 60px; height: 60px;">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                    </svg>
                    <span class="card-text" style="font-size: 1.5rem; margin-top: 15px;">Gerenciar Frota</span>
                    <span style="color: #444; margin-top: 10px; font-size: 0.9rem;">Controle de veículos e vínculos</span>
                </div>
            </a>

        </div>

        <div class="hero-links" style="justify-content: center; margin-top: 40px;">
            <span style="opacity: 0.5; font-size: 0.8rem;">Sistema v1.0 - Phocus Seguros</span>
        </div>
    </div>

</body>
</html>