<?php

class Conexion{
    private $conect;

    public function __construct(){
        $connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
        try {
            $this->conect = new PDO($connectionString, DB_USER,DB_PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            $this->conect = "Connection error";
            echo "Error: ".$e->getMessage();
        }
    }

    public function conect(){
        return $this->conect;
    }
}