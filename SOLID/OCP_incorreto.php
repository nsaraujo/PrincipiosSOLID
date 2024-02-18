<?php

//Princípio Aberto/Fechado

// Esse código viola os princípios OCP pois no caso de adicionar um caminhão para revisão ou reparo, por exemplo,
// precisaríamos alterar uma classe já existente para adicionar um novo comportamento e segundo o OCP as classes devem
// estar abertas para extensão e fechadas para modificação 

public class carros {
    public function revisao(){

    } 
}

public class motos {
    public function reparo(){

    }

public class resumo_ordem_servico{
    protected $valor_a_pagar;
    
    }

    public function calcular_servico( $veiculo ){
        if ($veiculo instanceof carros ){
            $this->valor_a_pagar = $veiculo->revisao();
        } else if ($veiculo instanceof motos ) {
            $this->valor_a_pagar = $veiculo->reparo();
        }
    }
}

?> 