<?php

//Princípio da Substituição de Liskov

// Esse Código não segue os princípios do LSP pois a classe carro que esta sendo herdada de veiculo implementa a função:
// transportar_veiculos(); que não faz nada, que não tem utilidade na classe carro

public abstract class veiculo{
    public function transportar_pessoas();
    public function transportar_veiculos();

}

public class Guincho extends veiculo{
    @override 

    public function transportar_pessoas();
    public function transportar_veiculos();

}

public class carro extends veiculo{
    @Override
    
    public function transportar_pessoas();
// Nesse cenário da classe carro a função transportar_veiculos(); não tem utilidade nenhuma, pois carro não transporta
// veiculos, transporta apenas pessoas
    public function transportar_veiculos();
}
?>