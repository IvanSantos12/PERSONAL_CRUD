<?php

// clase conectar

class Conectar{

    //Variable Protegida
    protected $dbh;
    protected function Conexion(){
        try{
          $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=crud1php", "ivan","ivan");
          return $conectar;
        }catch(Exeception $e){
            print "ERROR bd!: ".$e->getMessage()."</br>";
            die();

        }
    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}


?>