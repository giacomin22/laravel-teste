<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestVeiculos;
use Illuminate\Http\Request;
use App\Veiculo;

class ctrlVeiculos extends Controller {

    // Listar veículos
    public function listar(Request $request) {
        //$veiculos = [ 'Corsa', 'Celta', 'Uno', 'Fiesta' ];            //Exemplo antigo
        $veiculos = Veiculo::query()->orderBy('nome')->get();           // Busca os dados no banco e exibe em ordem alfabética 
        $msg = $request->session()->get('msg');                         // Armazena mensagem da sessão, adicionada no método salvar()
        //$request->session()->remove('msg');                           // Remove mensagem da sessão (não é necessaŕio pos é feito pelo flash() e não mais pelo put() )
        return view('viewVeiculosListar', ['veiculos' => $veiculos], ['msg' => $msg]);   // Direciona resultado para a view
    }  

    // Adicionar veículos
    public function adicionar ()  {
        return view('viewVeiculosAdicionar');                           // Direciona para a view
    }

    // Salvar veículos
    //public function salvar(Request $request) {                        // Era usado antes de implementar o RequestVeiculos
    public function salvar(RequestVeiculos $request) {

        // Exemplo de validação por campo (substituído por um formRequest)
        // $request->validate(['nome' => 'required|min:3']);

        // $nome = $request->get('nome');                               // Pode ser simplificado conforme a linha abaixo
        $nome = $request->nome;                                         // Onde 'nome' é o nome do input do formulário da view
        $fabricante = $request->fabricante;
        $ano = $request->ano;
        $placa = $request->placa;
        $data_compra = $request->data_compra;

        $veiculo = new Veiculo();
        
        $veiculo->nome = $nome;
        $veiculo->fabricante = $fabricante;
        $veiculo->ano = $ano;
        $veiculo->placa = $placa;
        $veiculo->data_compra = $data_compra;
        $veiculo->save();

        $request->session()->flash('msg', "$veiculo->nome adicionado(a) com sucesso");  //Adiciona uma mensagem em somente uma sessão ( flash() )
        
        return redirect('/veiculos');
    }

    // Remover veículos
    public function remover(Request $request) {

        $id = $request->id;
        
        /*
        //Substituída pela linha abaixo pois nesse caso não é preciso instanciar
        $veiculo = new Veiculo();
        $veiculo->destroy($id);
        */

        Veiculo::destroy($id);

        $request->session()->flash('msg', 'Veículo removido(a) com sucesso');  //Adiciona uma mensagem em somente uma sessão ( flash() )
        
        return redirect('/veiculos');
    }

    //Editar Veículos
    public function editar(Request $request) {}

}

?>

