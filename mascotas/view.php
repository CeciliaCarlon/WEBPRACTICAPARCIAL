<?php

class view{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showHome(){
        //home;
    }

    function showMascotas($mascotas){
        $this->smarty->assign('mascotas',$mascotas);
        $this->smarty->display('mostrarMascotas.tpl');
    }
}