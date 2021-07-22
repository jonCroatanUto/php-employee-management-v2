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
    }
    function connect(){
        try{
            $conn = new mysqli($this->host, $this->user, $this->password, $this->db);
            return $conn;
        }catch(mysqli_sql_exception $e){
            throw $e;
        }
    }
}