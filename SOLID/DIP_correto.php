<?php

//Princípio de Inversão de Dependência

public interface DBconnectionInterface{
    public function connect();

}

public class SQLServerConnection implements DBconnectionInterface{
    public function connect();

}

public class MySQLConnection implements DBconnectionInterface{
    public function connect();

}

public class recuperar_password{
    private $dbConnection;

    public function __contruction( DBconnectionInterface $dbConnection ){
        $this->dbConnection = dbConnection();
    }
}

?>