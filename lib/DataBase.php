<?php

class DataBase{
    private $host;
    private $db;
    private $user;
    private $password;

    function __construct(){
        $this->host=constant("HOST");
        $this->db=constant("DB");
        $this->user=constant("USER");
        $this->password=constant("PASSWORD");
        $this->charset=constant("CHARSET");
    }
    function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";"
                . "dbname=" . $this->db . ";"
                . "charset=" . $this->charset;

            $options = [
                        PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION, 
                        PDO::ATTR_EMULATE_PREPARES  => FALSE
                        ];
            
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;

        }catch(mysqli_sql_exception $e){
            throw $e;
        }
    }
}