<?php 

namespace App;

/* Dependências */
use Illuminate\Database\Eloquent\Model;

/* Classe Veículo que extende classe Model (eloquent) com funções para Banco de dados */ 
class Veiculo extends Model {
    
    #protected $table = 'veiculos'; // Não é necessário informar o nome da tabela desde que a classe tenha o mesmo nome da tabela.
                                    // Pelo nome da classe o Laravel identifica sozinho. 
    
}

?>