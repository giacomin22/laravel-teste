<?php $__env->startSection('cabecalho'); ?>
    Veículos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo'); ?>
    Veículos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('corpo'); ?>

    <?php if(!empty($msg)): ?>   <!-- Se $msg não estiver vazia, exibe toda div (com conteúdo de $msg) -->
    <div class='alert alert-success'>
        <?php echo e($msg); ?>

    </div>
    <?php endif; ?>

    <a href='/veiculos/adicionar' class='btn btn-success mb-2'>Adicionar</a>
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
                    <li class='list-group-item d-flex justify-content-between align-itens-center'> <?php echo e($veiculo->nome); ?> 
                        <span class='d-flex'>

                                <button class="btn btn-primary btn-sm mr-1">
                                    <i class="fas fa-eye"></i>
                                </button>
                            
                            <form method='post' action="/veiculos/editar/<?php echo e($veiculo->id); ?>">
                                <?php echo csrf_field(); ?>
                                <button class='btn btn-warning btn-sm mr-1'>
                                    <i class="far fa-edit"></i>                                
                                </button>
                            </form>    
                            
                            <form method='post' action="/veiculos/remover/<?php echo e($veiculo->id); ?>" onsubmit="return confirm('Remover <?php echo e($veiculo->nome); ?>?')">
                                <?php echo csrf_field(); ?>
                                <button class='btn btn-danger btn-sm'>
                                    <i class="far fa-trash-alt"></i>                                
                                </button>
                            </form>    

                        </span>
                        
                        
                    </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('viewTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/giacomin/www/laravel-teste/resources/views//viewVeiculosListar.blade.php ENDPATH**/ ?>