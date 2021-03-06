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
            
            @foreach ($veiculos as $veiculo)
                    <li class='list-group-item d-flex justify-content-between align-itens-center'> {{ $veiculo->nome }} 
                        <span class='d-flex'>

                                <button class="btn btn-primary btn-sm mr-1">
                                    <i class="fas fa-eye"></i>
                                </button>
                            
                            <form method='post' action="/veiculos/editar/{{ $veiculo->id }}">
                                @csrf
                                <button class='btn btn-warning btn-sm mr-1'>
                                    <i class="far fa-edit"></i>                                
                                </button>
                            </form>    
                            
                            <form method='post' action="/veiculos/remover/{{ $veiculo->id }}" onsubmit="return confirm('Remover {{ $veiculo->nome }}?')">
                                @csrf
                                <button class='btn btn-danger btn-sm'>
                                    <i class="far fa-trash-alt"></i>                                
                                </button>
                            </form>    

                        </span>
                        
                        
                    </li>
            @endforeach
        </ul>

@endsection



