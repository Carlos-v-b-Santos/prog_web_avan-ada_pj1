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
                    <li class="nav-item"><a class="nav-link" href="#">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre Nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Fale Conosco</a></li>

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
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Painel</a></li>
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
        <p>&copy; 2025 Sunlight Games - Todos os direitos reservados.</p>
        <p>Desenvolvido por Carlos, Odair, Lucas e Bruna.</p>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>