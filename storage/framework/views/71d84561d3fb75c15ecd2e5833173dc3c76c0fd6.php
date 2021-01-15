<?php $__env->startSection('cabecalho'); ?>
    Veículos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo'); ?>
    Veículos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('corpo'); ?>
    <a href='/veiculos/adicionar' class='btn btn-primary mb-2'>Adicionar</a>
        <ul class='list-group'>
            <?php
            $resultado = ''; 
            foreach ($veiculos as $veiculo) {
                $resultado .= "<li class='list-group-item'> $veiculo </li>";
            }
            echo $resultado;
            ?>
        </ul>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('viewTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-teste/resources/views/viewVeiculosListar.blade.php ENDPATH**/ ?>