<?php

class controller{

    private $model;

    function __construct(){

        $this->model = new model();

    }

    function getBicicleta($params=null){
        $id= $params[":ID"];
        $bicicleta= $this->model->getBicicleta($id);
    }
}