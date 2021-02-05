<!doctype html>
<html>
    <head>
        <meta charset='utf8'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title><?php echo $__env->yieldContent('titulo'); ?></title>
    </head>
    <body>
        <div class='container'>
            <div class='jumbotron'>
                <h1><?php echo $__env->yieldContent('cabecalho'); ?></h1>
            </div>
            <?php echo $__env->yieldContent('corpo'); ?>
        </div>
    </body>
    
</html>

<?php /**PATH /home/giacomin/www/laravel-teste/resources/views/template.blade.php ENDPATH**/ ?>