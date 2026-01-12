<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporação Tech - @yield('titulo')</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="{{ route('home') }}">
                Corporação<span class="text-primary">Tech</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuTopo">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuTopo">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Vagas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre Nós</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        @yield('conteudo')
    </main>

    <footer class="bg-white py-4 mt-auto border-top text-center text-muted">
        <small>&copy; {{ date('Y') }} TechCorp. Todos os direitos reservados.</small>
    </footer>

</body>
</html>