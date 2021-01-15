<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;

class ctrlVeiculos extends Controller {

    // Listar veículos
    public function listar() {
        //$veiculos = [ 'Corsa', 'Celta', 'Uno', 'Fiesta' ];            //Exemplo antigo
        $veiculos = Veiculo::all();                                     // Busca no banco as informações da tabela
        return view('viewVeiculosListar', ['veiculos' => $veiculos]);   // Direciona resultado para a view
    }  

    // Adicionar veículos
    public function adicionar ()  {
        return view('viewVeiculosAdicionar');                           // Direciona para a view
    }

    // Salvar veículos
    public function salvar(Request $request) {

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

    }

}

?>

