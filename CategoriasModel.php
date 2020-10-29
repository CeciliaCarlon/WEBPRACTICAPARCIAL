<?php

class model{

    private $db;
    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=bicicleteria_cadenitas;charset=utf8', 'root', '');
    
    }

    function getCategorias(){
        $sentencia->db->prepare("SELECT * FROM categorias");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }


}