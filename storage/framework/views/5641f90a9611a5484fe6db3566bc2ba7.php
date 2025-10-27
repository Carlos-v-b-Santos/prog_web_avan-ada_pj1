

<?php $__env->startSection('titulo', 'Início'); ?>

<?php $__env->startSection('conteudo'); ?>
<div class="container text-center mt-5">
    <h1 class="display-4 fw-bold text-warning">Bem-vindo à Sunlight ☀️</h1>

    <p class="lead mt-3">
        Aqui a diversão brilha mais forte! Explore o universo dos games com promoções imperdíveis, lançamentos e muito mais.
    </p>

    <div class="mt-5">
        
        <a href="#" class="btn btn-sol btn-lg me-2">Ver Catálogo</a>

        
        <a href="<?php echo e(route('sobre')); ?>" class="btn btn-outline-light btn-lg">Sobre Nós</a>
    </div>

    <div class="mt-0">
        <img src="<?php echo e(asset('imagens/paginas/sobre.png')); ?>"
             alt="Sunlight Games" class="img-fluid" style="max-height: 300px; opacity: 0.8;">
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\sunlight\resources\views/home.blade.php ENDPATH**/ ?>