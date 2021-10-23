<?php

class Mysql extends Conexion {

    private $conection;
    private $strquery;
    private $arrValues;


    public function __construct()
    {
        $this->conection = new Conexion();
        $this->conection = $this->conection->conect();
    }



    public function insert($query,$arrValues){
        $this->strquery = $query;
        $this->arrValues = $arrValues;

        $insert = $this->conection->prepare($this->strquery);
        $resInsert = $insert->execute($this->arrValues);
        if ($resInsert){
            $lastInsert = $this->conection->lastInsertId();
        }else{
            $lastInsert = 0;
        }
        return $lastInsert;
    }

    public function select($query){
        $this->strquery = $query;

        $result = $this->conection->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);

        return $data;
    }

    public function select_all($query){
        $this->strquery = $query;

        $result = $this->conection->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);

        return $data;
    }


    public function update($query,$arrValues){
        $this->strquery = $query;
        $this->arrValues = $arrValues;

        $update = $this->conection->prepare($this->strquery);
        $resExecute = $update->execute($this->arrValues);

        return $resExecute;
    }


    public function delete($query){
        $this->strquery = $query;

        $result = $this->conection->prepare($this->strquery);
        $del = $result->execute();

        return $del;
    }


}