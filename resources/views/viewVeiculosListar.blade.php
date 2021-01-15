@extends('viewTemplate')

@section('cabecalho')
    Veículos
@endsection

@section('titulo')
    Veículos
@endsection

@section('corpo')

    @if(!empty($msg))   <!-- Se $msg não estiver vazia, exibe toda div (com conteúdo de $msg) -->
    <div class='alert alert-success'>
        {{ $msg }}
    </div>
    @endif

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
            
            @foreach ($veiculos as $veiculo)
                    <li class='list-group-item'> {{ $veiculo->nome }} 
                        
                        <form method='post' action="/veiculos/remover/{{ $veiculo->id }}" onsubmit="return confirm('Remover {{ $veiculo->nome }}?')">
                            @csrf
                            <button class='btn btn-danger'>Remover</button>
                        </form>
                    </li>
            @endforeach
            

        </ul>
@endsection


