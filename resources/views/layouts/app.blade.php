<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunlight - @yield('titulo')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Estilo personalizado da Sunlight --}}
    <style>
        body {
            background-color: #0f1116;
            color: #f5f5f5;
            font-family: 'Segoe UI', sans-serif;
        }
        nav {
            background-color: #15171e;
        }
        footer {
            background-color: #15171e;
            color: #aaa;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }
        .btn-sol {
            background-color: #ffba00;
            color: #000;
            font-weight: bold;
            border: none;
        }
        .btn-sol:hover {
            background-color: #ffcc33;
        }
    </style>
</head>
<body>
    {{-- Barra de navegação (Lucas) --}}
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            {{-- Logotipo e nome do site --}}
            <a class="navbar-brand fw-bold text-warning" href="{{ route('home') }}">☀️ Sunlight</a>

            {{-- Menu responsivo (abre no celular) --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Itens do menu --}}
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('catalogo') }}">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre Nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('mensagens.create') }}">Fale Conosco</a></li>

                    {{-- 🔥 LUCAS: login/cadastro/logout --}}
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-warning fw-bold" href="{{ route('login') }}">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning fw-bold" href="{{ route('register') }}">Cadastrar</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-warning fw-bold" href="#" role="button"
                            data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('games.index') }}">Gerenciar jogos</a></li>
                                <li><a class="dropdown-item" href="{{ route('mensagens.index') }}">Mensagens recebidas</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Sair</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    {{-- Área principal do conteúdo --}}
    <main class="py-5">
        @yield('conteudo')
    </main>

    {{-- Rodape--}}
    <footer>
    <div class="container py-4">

        <div class="row align-items-center text-center text-md-start">

            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h6 class="text-warning fw-bold mb-3" style="font-size: 0.9rem;">Fale Conosco ☀️</h6>

                <p class="small mb-2 text-light" style="font-size: 0.8rem;">
                    <i class="bi bi-geo-alt-fill text-warning me-2"></i>
                    Rua da Luz, 123 - Centro, Corumbá - MS
                </p>

                <p class="small mb-2 text-light" style="font-size: 0.8rem;">
                    <i class="bi bi-telephone-fill text-warning me-2"></i>
                    (67) 3234-6813
                </p>

                <p class="small mb-2 text-light" style="font-size: 0.8rem;">
                    <i class="bi bi-envelope-fill text-warning me-2"></i>
                    contato@sunlightgames.com.br
                </p>

                <a href="https://wa.me/556732346813"
                   class="d-inline-flex align-items-center text-success fw-bold small"
                   target="_blank" style="text-decoration: none; font-size: 0.8rem;">
                    <i class="bi bi-whatsapp fs-6 me-2"></i> WhatsApp
                </a>
            </div>

            <div class="col-12 col-md-4 mb-4 mb-md-0 d-flex flex-column justify-content-center align-items-center">
                <p class="text-light mb-1" style="font-size: 0.8rem;">
                    &copy; 2025 <span class="text-warning">Sunlight Games</span> - Todos os direitos reservados.
                </p>
                <p class="text-secondary mb-0" style="font-size: 0.75rem;">
                    Desenvolvido por Lucas, Odair, Carlos e Bruna.
                </p>
            </div>

            <div class="col-12 col-md-4 d-flex justify-content-md-end justify-content-center">
                <div class="mapa-container shadow-sm"
                     style="width: 110px; height: 80px; border-radius: 8px; overflow: hidden;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.650344414815!2d-57.63176485235737!3d-19.00159493541092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93870bf1a726e20f%3A0x859a335b1dc2361!2sUFMS%2FCPAN%20-%20Unidade%20II!5e0!3m2!1spt-BR!2sbo!4v1762284164315!5m2!1spt-BR!2sbo"
                        width="100%" height="100%" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
