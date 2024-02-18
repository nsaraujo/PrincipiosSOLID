<?php

// Nesse código as dependencias serão invertidas, com isso não irei utilizar mais if e else, irei utilizar interfaces, 
// agora todo tipo de veiculo poderá implementar o seu tipo de servico, e a função de calcular irá calcular direto o 
// tipo de serviço realizado

public interface servicos{
    public function servico();
}

public class carros implements servicos{
    public function revisao(){

    } 
}

public class motos implements servicos{
    public function reparo(){

    }
}

public class caminhoes implements servicos{
        public function reparo(){
    
        }

}

public class resumo_ordem_servico{
    protected $valor_a_pagar;

    public function calcular_servico (servicos $veiculo){
        $this->valor_a_pagar = $veiculo->servico();
    }
}
?>