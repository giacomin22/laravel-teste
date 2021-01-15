<?php $__env->startSection('cabecalho'); ?>
    Veículos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo'); ?>
    Veículos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('corpo'); ?>
    <a href='/veiculos/adicionar' class='btn btn-primary mb-2'>Adicionar</a>
        <ul class='list-group'>
            
            <!-- Substituído pelo código abaixo (formato blade) --
            <\?php
            $resultado = ''; 
            foreach ($veiculos as $veiculo) {
                $resultado .= "<li class='list-group-item'> $veiculo->nome </li>";
            }
            echo $resultado;
            ?>
            -->
            
            <?php $__currentLoopData = $veiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $veiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class='list-group-item'> <?php echo e($veiculo->nome); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            

        </ul>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('viewTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-teste/resources/views/viewVeiculosListar.blade.php ENDPATH**/ ?>