<?php

//Princípio de segregação de interface

public interface veiculos{
    public function manobrar_carro();
    public function manobrar_moto();
}

public interface veiculos_pesados extends veiculo{
    public function manoborar_caminhao();
}

public class motorista1 implements veiculos_pesados{
    public function manobrar_carro();
    public function manoborar_caminhao();
    public function manobrar_moto();
}

public class motorista2 implements veiculos{
    public function manobrar_carro();
    public function manobrar_moto();
}
?>