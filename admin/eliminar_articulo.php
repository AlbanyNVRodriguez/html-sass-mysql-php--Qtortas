<?php session_start();
    require 'config.php';
    require '../funciones.php';
    
    if(!$_SESSION['admin']){
        header("Location:".RUTA."/admin");
    }else{
        $conexion = db_conexion($qtortas_db['db_name'], $qtortas_db['db_usuario'], $qtortas_db['db_contraseña']);
        if(!$conexion){
            die("Propio: Error en base de datos");
        }
    
        $id= (int)limpiarDatos($_GET['id']);
        if(!$id){
            header('Location:'.RUTA.'/admin');
        }
        
        tablaEliminar($conexion, $qtortas_db['tabla_catalogo'], $id);
        header('Location:'.RUTA.'/admin');
    }

    

?>