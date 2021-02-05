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
    
    <form method='post' action='/veiculos/atualizar'>
        @csrf
        <div class='form-group'>
        
            <input type='text' name='id' id='id' class='form-control' value='{{ $veiculo->id }}' hidden>
            <label for='nome'>Nome</label>
            <input type='text' name='nome' id='nome' class='form-control' value='{{ $veiculo->nome }}'>
            <label for='fabricante'>Fabricante</label>
            <select id="fabricante" name="fabricante" class='form-control'>
                <option value="{{ $veiculo->fabricante }}">{{ $veiculo->fabricante }}</option>
                @foreach($fabricantes as $fabricante)
                    <option value="{{ $fabricante->nome }}">{{ $fabricante->nome }}</option>
                @endforeach
            </select>
            <label for='ano'>Ano</label>
            <input type='text' name='ano' id='ano' class='form-control' value='{{ $veiculo->ano }}'>

        </div>
        <button class='btn btn-primary'> Salvar </button>
    </form>
@endsection