<?php

//Princípio de segregação de interface

// A regra de negócio diz que é necessário que o motorista seja devidamente habilitado para manobrar cada um dos veiculos 
// descritos nas funções a baixo, e que cada motorista precisa no mínimo possuir habilitação de moto e carro


public interface veiculos{
    public function manobrar_carro();
    public function manoborar_caminhao();
    public function manobrar_moto();
}

public class motorista1 implements veiculos{
    public function manobrar_carro();
    public function manoborar_caminhao();
    public function manobrar_moto();
}

public class motorista2 implements veiculos{
    public function manobrar_carro();

// Porém o motorista2 não é habilitado com a categoria E e não pode manobrar caminhões, então a função a baixo não faz 
// nada pois o motorista não pode manobrar camminhão
    public function manoborar_caminhao();
    public function manobrar_moto();
}
?>