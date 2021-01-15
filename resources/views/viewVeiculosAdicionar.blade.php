@extends('template')

@section('cabecalho')
    Veículos
@endsection


@section('titulo')
    Veículos
@endsection

@section('corpo')
    <form method='POST'>
        <div class='form-group'>
            <label for='nomeVeiculo'>Nome do veículo:</label>
            <input type='text' class='form-control' name='nomeVeiculo' id='nomeVeiculo'>
        </div>
        <button class='btn btn-primary'> Salvar </button>
    </form>
@endsection