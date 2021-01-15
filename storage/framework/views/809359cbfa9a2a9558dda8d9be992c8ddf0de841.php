<?php $__env->startSection('cabecalho'); ?>
    Veículos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo'); ?>
    Veículos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('corpo'); ?>
    <form method='post' action='/veiculos/salvar'>
        <?php echo csrf_field(); ?> <!-- Necessário para um POST no Laravel -->
        <div class='form-group'>
            <label for='nome'>Nome</label>
            <input type='text' name='nome' id='nome' class='form-control'>
            
            <label for='fabricante'>Fabricante</label>
            <input type='text' name='fabricante' id='fabricante' class='form-control'>

            <label for='ano'>Ano</label>
            <input type='text' name='ano' id='ano' class='form-control'>

            <label for='placa'>Placa</label>
            <input type='text' name='placa' id='placa' class='form-control'>

            <label for='data_compra'>Data de Compra</label>
            <input type='text' name='data_compra' id='data_compra' class='form-control'>

        </div>
        <button class='btn btn-primary'> Salvar </button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('viewTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-teste/resources/views/viewVeiculosAdicionar.blade.php ENDPATH**/ ?>