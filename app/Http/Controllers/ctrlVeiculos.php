<?php

namespace App\Http\Controllers;

class ctrlVeiculos extends Controller {

    public function listar() {
        $veiculos = [ 'Corsa', 'Celta', 'Uno', 'Fiesta' ];
        return view('viewVeiculosListar', ['veiculos' => $veiculos]);
     
    }  
    public function adicionar ()  {
        return view('viewVeiculosAdicionar');
    }
}
?>

