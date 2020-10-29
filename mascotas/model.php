<?php

class model{

    private $db;
    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=DeChiripaSA;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    function getAllData(){
        $sentencia= $this->db->prepare("SELECT * FROM MASCOTA INNER JOIN CIUDAD ON id_ciudad_fk=id_ciudad ORDER BY id_mascota DESC LIMIT 3");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getCiudadesConCede(){
        $sentencia= $this->db->prepare("SELECT * FROM CIUDAD WHERE sede=1");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getMascotaPorEstado($estado){
        $sentencia= $this->db->prepare("SELECT * FROM MASCOTA WHERE estado=?");
        $sentencia->execute(array($estado));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}