<?php $__env->startSection('cabecalho'); ?>
    Veículos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo'); ?>
    Veículos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('corpo'); ?>
    
    <!-- Alerta de erros no preenchimento dos campos -->
    <?php if($errors->any()): ?>
        <div class='alert alert-danger'>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <form method='post' action='/veiculos/atualizar'>
        <?php echo csrf_field(); ?>
        <div class='form-group'>
            <input type='text' name='id' id='id' class='form-control' value='<?php echo e($veiculo->id); ?>' hidden>
            <label for='nome'>Nome</label>
            <input type='text' name='nome' id='nome' class='form-control' value='<?php echo e($veiculo->nome); ?>'>
            <label for='fabricante'>Fabricante</label>
            <select id="fabricante" name="fabricante" class='form-control'>
            <option value="<?php echo e($veiculo->fabricante); ?>"><?php echo e($veiculo->fabricante); ?></option>
            <?php $__currentLoopData = $fabricantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fabricante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <option value="<?php echo e($fabricante->nome); ?>"><?php echo e($fabricante->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <label for='ano'>Ano</label>
            <input type='text' name='ano' id='ano' class='form-control' value='<?php echo e($veiculo->ano); ?>'>

            <!--
            <label for='placa'>Placa</label>
            <input type='text' name='placa' id='placa' class='form-control'>

            <label for='data_compra'>Data de Compra</label>
            <input type='text' name='data_compra' id='data_compra' class='form-control'>
            -->

        </div>
        <button class='btn btn-primary'> Salvar </button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('viewTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/giacomin/www/laravel-teste/resources/views/viewVeiculosEditar.blade.php ENDPATH**/ ?>