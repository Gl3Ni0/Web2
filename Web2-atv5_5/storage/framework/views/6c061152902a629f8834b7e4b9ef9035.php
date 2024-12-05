<?php $__env->startSection('content'); ?>
<div class="container">
<h1 class="my-4">Detalhes do Autor</h1>

<div class="card">
    <div class="card-header">
        Autor: <?php echo e($author->name); ?>

    </div>
    <div class="card-body">
        <p><strong>ID:</strong> <?php echo e($author->id); ?></p>
        <p><strong>Nome:</strong> <?php echo e($author->name); ?></p>
    </div>
</div>

<a href="<?php echo e(route('authors.index')); ?>" class="btn btn-secondary mt-3">
    <i class="bi bi-arrow-left"></i> Voltar
</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunoifpe/Web2-atv5_5/resources/views/authors/show.blade.php ENDPATH**/ ?>