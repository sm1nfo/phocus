<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phocus Seguros</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Estilos específicos para esta Landing Page para garantir o visual da imagem */
        body { background-color: #2f3e10; color: white; } /* Cor exata do fundo */
        .lp-navbar { display: flex; justify-content: space-between; align-items: center; padding: 30px 10%; }
        .lp-btn-login { background-color: #cdef9f; color: #2f3e10; padding: 10px 25px; border-radius: 4px; font-weight: bold; text-decoration: none; }
        
        .lp-hero { padding: 60px 10%; display: flex; flex-direction: column; justify-content: center; min-height: 60vh; }
        .lp-title { font-size: 3.5rem; font-weight: 300; line-height: 1.2; margin-bottom: 20px; }
        .lp-subtitle { color: #cccccc; font-size: 1.1rem; margin-bottom: 40px; font-weight: 300; max-width: 500px; }
        
        /* Botão de Chamada para Ação (CTA) */
        .btn-cta {
            background-color: #cdef9f;
            color: #2f3e10;
            padding: 18px 40px;
            font-size: 1.1rem;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 6px;
            display: inline-block;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-cta:hover { transform: scale(1.05); box-shadow: 0 0 15px rgba(205, 239, 159, 0.3); }

        .lp-cards-area { padding: 0 10% 80px 10%; }
        .lp-cards-label { color: #cdef9f; font-size: 0.9rem; margin-bottom: 20px; display: block; }
        .lp-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .lp-card { background-color: #587c1d; padding: 40px 20px; border-radius: 6px; text-align: center; height: 180px; display: flex; flex-direction: column; justify-content: center; align-items: center; }
        .lp-card span { color: black; font-weight: 500; margin-top: 15px; }
        .lp-card svg { width: 40px; height: 40px; opacity: 0.6; color: black; }
    </style>
</head>
<body>

    <nav class="lp-navbar">
        <div style="display: flex; align-items: center; gap: 10px;">
            <img src="{{ asset('img/logo.svg') }}" style="height: 30px;" alt="Logo">
            <span style="font-weight: bold; font-size: 1.2rem;">Phocus Seguros</span>
        </div>
        <a href="{{ route('login') }}" class="lp-btn-login">Entrar</a>
    </nav>

    <div class="lp-hero">
        <h1 class="lp-title">
            Produtividade E <br>
            Tranquilidade <br>
            Em Uma Semana
        </h1>
        <p class="lp-subtitle">
            As melhores proteções para o seu carro, moto ou frota. Cadastre-se agora e receba nossa proposta.
        </p>
        
        <div>
            <a href="{{ route('public.form') }}" class="btn-cta">
                Quero Cadastrar Meu Veículo
            </a>
        </div>
    </div>

    <div class="lp-cards-area">
        <span class="lp-cards-label">Nossas soluções</span>
        <div class="lp-grid">
            <div class="lp-card">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                <span>Segurança E Eficiência</span>
            </div>
            <div class="lp-card">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>
                <span>Proteção E Gestão Facilitada</span>
            </div>
            <div class="lp-card">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>Excelência Para o Cliente</span>
            </div>
        </div>
    </div>

</body>
</html>