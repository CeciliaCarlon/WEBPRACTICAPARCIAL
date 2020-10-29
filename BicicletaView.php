<?php

class view{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showBicicletas($bicicletas){
        $this->smarty->assign('bicicletas',$bicicletas);
        $this->smarty->display('mostrarBicicletas.tpl');
    }

}