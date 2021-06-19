<?php session_start();

    require 'config.php';
    require '../funciones.php';

    if(!$_SESSION['admin']){
        header("Location:".RUTA."/admin/login_admin.php");
    }

    $conexion = db_conexion($qtortas_db['db_name'], $qtortas_db['db_usuario'], $qtortas_db['db_contraseña']);
    if(!$conexion){
        die("Propio: Error en base de datos");
    }

    $articulos_por_pagina=4;
    $paginaActual= isset($_GET['p'])? (int)$_GET['p']: 1;
    $paginaInicio = $paginaActual>1? ($paginaActual * $articulos_por_pagina - $articulos_por_pagina) : 0;
    $resultado=tablaDatosPaginacion($conexion, $qtortas_db['tabla_catalogo'], $paginaInicio, $articulos_por_pagina);

    $tortas = $resultado["articulos"];
    $paginacion = $resultado["numeroPaginas"]==0? 1: $resultado["numeroPaginas"];
    var_dump($_SESSION);
    
    require '../views/index_admin.view.php';
?>