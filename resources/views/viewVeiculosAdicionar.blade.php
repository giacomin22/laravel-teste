@extends('viewTemplate')

@section('cabecalho')
    Veículos
@endsection

@section('titulo')
    Veículos
@endsection

@section('corpo')
    
    <!-- Alerta de erros no preenchimento dos campos -->
    @if ($errors->any())
        <div class='alert alert-danger'>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method='post' action='/veiculos/salvar'>
        @csrf <!-- Necessário para um POST no Laravel --> 
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
@endsection