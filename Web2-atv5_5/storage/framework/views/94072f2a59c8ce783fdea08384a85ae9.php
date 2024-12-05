<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="my-4">Detalhes do Livro</h1>

    <div class="card">
        <div class="card-header">
            <strong>Título:</strong> <?php echo e($book->title); ?>

        </div>
        <div class="card-body">
            <p><strong>Autor:</strong>
                <a href="<?php echo e(route('authors.show', $book->author->id)); ?>">
                    <?php echo e($book->author->name); ?>

                    </a>
            </p>
            <p><strong>Editora:</strong>
                <a href="<?php echo e(route('publishers.show', $book->publisher->id)); ?>">
                    <?php echo e($book->publisher->name); ?>

                </a>
            </p>
            <p><strong>Categoria:</strong>
                <a href="<?php echo e(route('categories.show', $book->category->id)); ?>">
                    <?php echo e($book->category->name); ?>

                </a>
            </p>
        </div>
    </div>

    <a href="<?php echo e(route('books.index')); ?>" class="btn btn-secondary mt-3">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunoifpe/Web2-atv5_5/resources/views/books/show.blade.php ENDPATH**/ ?>