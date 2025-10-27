<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunlight - <?php echo $__env->yieldContent('titulo'); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
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
    
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            
            <a class="navbar-brand fw-bold text-warning" href="<?php echo e(route('home')); ?>">☀️ Sunlight</a>

            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>">Início</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="#">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('sobre')); ?>">Sobre Nós</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="#">Fale Conosco</a></li>

                    
                </ul>
            </div>
        </div>
    </nav>

    
    <main class="py-5">
        <?php echo $__env->yieldContent('conteudo'); ?>
    </main>

    
    <footer>
        <p>&copy; 2025 Sunlight Games - Todos os direitos reservados.</p>
        <p>Desenvolvido por Carlos, Odair, Lucas e Bruna.</p>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sunlight\resources\views/layouts/app.blade.php ENDPATH**/ ?>