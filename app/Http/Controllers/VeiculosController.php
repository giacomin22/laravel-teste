<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculosController extends Controller {

    public function listar(Request $request) {
        echo $request->query();
        exit();
    
        $veiculos = [ 'Corsa', 'Celta', 'Uno', 'Fiesta' ];
        
        $resultado = '';
        foreach ($veiculos as $veiculo) {
            $resultado .= "<p>$veiculo<p>";
        }
        return $resultado;
    }  
}
?>

