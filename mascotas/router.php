<?php

    define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');
    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "controller", "home");
    $r->addRoute("mostrarMascotas", "GET", "controller", "mascotasPorCiudad");


    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 