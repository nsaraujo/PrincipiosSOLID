<?php

//Princípio da Substituição de Liskov

public abstract class veiculo{
    public function transportar_pessoas();

}

public class Onibus extends veiculo{
    @override 

    public function transportar_pessoas();
}

public class carro extends veiculo{
    @Override
    
    public function transportar_pessoas();
}
?>