<?php

class controller{

    private $view;
    private $model;

    function __construct(){

        $this->view = new view();
        $this->model = new model();

    }

    function mascotasPorCiudad(){
        $mascotas=$this->model->getAllData();
        $this->view->showMascotas($mascotas);
    }

}
