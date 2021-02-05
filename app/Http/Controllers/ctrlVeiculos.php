<?php

namespace App\Http\Controllers;

/* Dependências */
use App\Http\Requests\RequestVeiculos;
use Illuminate\Http\Request;
use App\Veiculo;
use App\Fabricante;

/* Classe Controller Veículos */
class ctrlVeiculos extends Controller {

    /* Função para listar relação de veículos registrados no banco */
    public function listar(Request $request) {
        
        //Carrega relação de veículos em ordem alfabética
        $veiculos = Veiculo::query()->orderBy('nome')->get();
        
        //Captura mensagem da sessão, enviada pelo método salvar
        $msg = $request->session()->get('msg');
        
        // Envia informações coletadas para a tela de listagem de veículos
        return view('viewVeiculosListar', ['veiculos' => $veiculos], ['msg' => $msg]);
    }  

    /* Função para carregar informações de veículo (para edição) */
    public function editar(Request $request) {
        
        // Captura valor do ID
        $id = $request->id;

        // Carrega informações do veículo e lista de fabricantes no banco 
        $veiculo = Veiculo::find($id);
        $fabricantes = Fabricante::query()->orderBy('nome')->get();

        // Envia para tela de edição as informações coletadas
        return view('viewVeiculosEditar', ['veiculo' => $veiculo], ['fabricantes' => $fabricantes]);
    }


    /* Função para atualizar informações de veículo no banco */
    public function atualizar(Request $request) {
        
        // Armazena dados coletados em variáveis
        $id = $request->id;
        $nome = $request->nome;
        $fabricante = $request->fabricante;
        $ano = $request->ano;
     
        //Busca informações do objeto do banco
        $veiculo = Veiculo::find($id);

        //Substitui as informações
        $veiculo->nome = $nome;
        $veiculo->fabricante = $fabricante;
        $veiculo->ano = $ano;

        //Salva objeto
        $veiculo->save();
        
        // Adiciona uma mensagem com validade de 1 sessão
        $request->session()->flash('msg', "$veiculo->nome atualizado com sucesso");
        
        // Redireciona para a página principal
        return redirect('/veiculos');
    }


    /* Função chamada ao clicar em Adicionar (veículos) */
    public function adicionar(Request $request)  {
        
        // Carrega informações de fabricantes e envia para tela de adição de veículos novos
        $fabricantes = Fabricante::query()->orderBy('nome')->get();
        return view('viewVeiculosAdicionar',  ['fabricantes' => $fabricantes]);
    }

    /* Função para salvar veículos oriundos da tela de adição */
    #public function salvar(Request $request) {                 // Usado antes de implementar o RequestVeiculos (para validação de campos)
    public function salvar(RequestVeiculos $request) {

        #$request->validate(['nome' => 'required|min:3']);      // Exemplo de validação por campo (substituído por um formRequest)

        // Coleta das informações
        #$nome = $request->get('nome');                         // Pode ser simplificado conforme a linha abaixo
        $nome = $request->nome;                                 // Onde 'nome' é o nome do input do formulário da view
        $fabricante = $request->fabricante;
        $ano = $request->ano;
        
        // Campos desabilitados temporariamente
        #$placa = $request->placa;
        #$data_compra = $request->data_compra;

        // Criação do novo objeto, alimentação dos atributos com as informações dos campos e salvamento no banco
        $veiculo = new Veiculo();
        $veiculo->nome = $nome;
        $veiculo->fabricante = $fabricante;
        $veiculo->ano = $ano;
        $veiculo->placa = "XXX-XXXX";
        $veiculo->data_compra = "01/01/2021";
        $veiculo->save();

        // Adiciona mensagem com validade de uma sessão
        $request->session()->flash('msg', "$veiculo->nome adicionado(a) com sucesso");
        
        // Redirecionamento para a página principal
        return redirect('/veiculos');
    }

    /* Função para remover veículos */
    public function remover(Request $request) {

        // Captura ID do registro
        $id = $request->id;
        
        // Remove registro do banco
        Veiculo::destroy($id);

        // Adiciona mensagem de sucesso com validade de uma sessão
        $request->session()->flash('msg', 'Veículo removido(a) com sucesso');
        
        // Redireciona para a página principal
        return redirect('/veiculos');
    }
}

?>