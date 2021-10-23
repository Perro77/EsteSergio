<?php

class homeModel extends Mysql {


    public function __construct(){
        parent::__construct();
    }

    public function setUser($name, $age){
        $query_insert = "INSERT INTO usuario(nombre,edad) VALUES(?,?)";
        $arrData = array($name,$age);
        $request_insert = $this->insert($query_insert, $arrData);
        return $request_insert;
    }

    public function getUser($id){
        $sql = "SELECT * FROM usuario WHERE id = $id";
        $request = $this->select($sql);
        return $request;
    }


    public function updateUser($id,$name,$age){
        $sql = "UPDATE usuario SET nombre = ?, edad = ? WHERE id = $id";
        $arrData = array($name,$age);
        $request = $this->update($sql,$arrData);
        return $request;
    }


    public function getUsers(){
        $sql = "SELECT * FROM usuario";
        $request = $this->select_all($sql);
        return $request;
    }

    public function deluser($id){
        $sql = "DELETE FROM usuario WHERE id = $id";
        $request = $this->delete($sql);
        return $request;
    }


}