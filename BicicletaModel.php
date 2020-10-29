<?php

class model{

    private $db;
    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=bicicleteria_cadenitas;charset=utf8', 'root', '');
    
    }

    function getBicicleta($id){
        $sentencia->db->prepare("SELECT * FROM bicicleta WHERE id=?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getBicicletas($categoria){
        $sentencia->db->prepare("SELECT * FROM bicicleta INNER JOIN categoria ON id_categoria_fk=id_categoria WHERE categoria=?");
        $sentencia->execute(array($categoria));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getBicicletaPorPrecio($precio){
        $sentencia->db->prepare("SELECT * FROM bicicleta WHERE precio<?");
        $sentencia->execute(array($precio));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getBicicletaPorRodado($rodado){
        $sentencia->db->prepare("SELECT * FROM bicicleta WHERE rodado=?");
        $sentencia->execute(array($rodado));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}