<?php
//Princípio de Inversão de Dependência

//Nesse código existe um alto nível de acoplamento, onde a classe recuperar_password tem a responsabilidade de criar uma 
//instância da classe SQLServerConnection, ou seja, isso fere os princípios de DIP pois se tivesse que reaproveitar a
//classe recuperar_password em outro sistema seria necessário obrigatoriamente levar a classe SQLServerConnection junto

use SQLServerConnection;

public class recuperar_password{
    private $dbConnection;

    public function __contruction(){
        $this->dbConnection = new SQLServerConnection();
    }
}













?>