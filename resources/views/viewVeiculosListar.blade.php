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
                    <li class='list-group-item d-flex justify-content-between align-itens-center'> {{ $veiculo->nome }} 
                        <span class='d-flex'>

                            <button class="btn btn-primary btn-sm mr-1" data-toggle="modal" data-target="#modalExemplo">
                                <i class="fas fa-eye"></i>
                            </button>

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

        <!-- Modal - em implementação-->
        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                </div>
                </div>
            </div>
        </div>

@endsection



