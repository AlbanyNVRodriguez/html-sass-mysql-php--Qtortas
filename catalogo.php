<?php
    require 'admin/config.php';
    require 'funciones.php';

    $conexion=db_conexion($qtortas_db['db_name'], $qtortas_db['db_usuario'], $qtortas_db['db_contraseña']);
    if(!$conexion){
        die("Propio: Error en base de datos");
    }

    $tortas = tablaDatos($conexion, $qtortas_db['tabla_catalogo']);
    redireccion($tortas);
    $seccion = "Catalogo";
    require 'views/catalogo.view.php';
?>