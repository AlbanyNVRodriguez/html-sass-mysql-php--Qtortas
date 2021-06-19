<?php
    require 'admin/config.php';
    require 'funciones.php';

    $conexion=db_conexion($qtortas_db['db_name'], $qtortas_db['db_usuario'], $qtortas_db['db_contraseña']);
    if(!$conexion){
        die("Propio: Error en base de datos");
    }

    $id=(int)limpiarDatos($_GET['id']);

    $torta = tablaId($conexion, $qtortas_db['tabla_catalogo'], $id);
    redireccion($torta);
    $seccion = $torta['nombre'];
    require 'views/torta_info.view.php';
?>