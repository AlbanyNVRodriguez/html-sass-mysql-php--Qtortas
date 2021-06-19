<?php

    // INTERACCIONES CON LA BASE DE DATOS
    //conexion a la base de datos
    function db_conexion($db_name, $db_usuario, $db_contraseña){
        try{
            $conexion = new PDO("mysql:host=localhost;dbname=$db_name;", $db_usuario, $db_contraseña);
            return $conexion;
        }catch(PDOException $e){
            return false;
        }
    }

    //traer datos de una tabla
    function tablaDatos($conexion, $tabla_name){
        $statement=$conexion->prepare("SELECT * FROM $tabla_name");
        $statement->execute();
        return $statement->fetchAll();
    }
    //traer datos de una tabla con paginacion
    function tablaDatosPaginacion($conexion, $tabla_name, $paginaInicio, $articulos_por_pagina){
        $statement=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM $tabla_name LIMIT $paginaInicio, $articulos_por_pagina");
        $statement->execute();
        $articulos = $statement->fetchAll();

        $totalFilas = $conexion->prepare("SELECT FOUND_ROWS() total");
        $totalFilas->execute();
        $totalFilas=$totalFilas->fetch()['total'];
        $numeroPaginas = ceil($totalFilas / $articulos_por_pagina);

        $resultado= ["articulos"=>$articulos, "numeroPaginas"=>$numeroPaginas];

        return $resultado;
    }
    //traer por ID de una tabla
    function tablaId($conexion, $tabla_name, $id){
        $statement=$conexion->prepare("SELECT * FROM $tabla_name WHERE id=:id");
        $statement->execute([":id"=>$id]);
        return $statement->fetch();
    }
    //editar datos de una tabla
    function tablaEditar($conexion, $tabla_name, $id, $nombre, $descripcion, $img, $fondo){
        $statement=$conexion->prepare("UPDATE $tabla_name SET nombre=:nombre, descripcion=:descripcion, img=:img, fondo=:fondo WHERE id=:id");
        $statement->execute([":nombre"=>$nombre, ":descripcion"=>$descripcion, ":img"=>$img, ":fondo"=>$fondo, ":id"=>$id]);
    }
    //eliminar datos de una tabla
    function tablaEliminar($conexion, $tabla_name, $id){
        $statement=$conexion->prepare("DELETE FROM $tabla_name WHERE id=:id");
        $statement->execute([":id"=>$id]);
    }
    //comprobar administrador
    function comprobarAdmin($conexion, $tabla_name, $usuario, $pass){
        $statement=$conexion->prepare("SELECT * FROM $tabla_name WHERE usuario=:usuario AND pass=:pass");
        $statement->execute(array(":usuario"=>$usuario, ":pass"=>$pass));
        return $statement->fetch();
    }
    //redireccion en caso de false
    function redireccion($resultado){
        if(!$resultado){
            header("Location:".RUTA.'/index.php');
        }
    }
    /////////////////////////////////////


    // limpiar datos
    function limpiarDatos($dato){
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
    //combrobar sesion
    function comprobarSesion(){
        if(!$_SESSION['admin']){
            header("Location:".RUTA."/admin");
        }
    }
?>