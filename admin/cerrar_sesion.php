<?php session_start();

    require 'config.php';
    require '../funciones.php';

    comprobarSesion();
    $_SESSION=array();
    session_destroy();
    header('Location:'.RUTA.'/admin');

?>