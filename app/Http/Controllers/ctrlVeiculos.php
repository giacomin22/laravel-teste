<?php

namespace App\Http\Controllers;

class ctrlVeiculos extends Controller {

    // Listar veículos
    public function listar() {
        $veiculos = [ 'Corsa', 'Celta', 'Uno', 'Fiesta' ];
        return view('viewVeiculosListar', ['veiculos' => $veiculos]); // Direciona para a view
    }  

    // Adicionar veículos
    public function adicionar ()  {
        return view('viewVeiculosAdicionar'); // Direciona para a view
    }
}

?>

