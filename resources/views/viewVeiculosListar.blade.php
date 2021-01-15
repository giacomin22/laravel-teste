@extends('viewTemplate')

@section('cabecalho')
    Veículos
@endsection

@section('titulo')
    Veículos
@endsection

@section('corpo')
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
@endsection


