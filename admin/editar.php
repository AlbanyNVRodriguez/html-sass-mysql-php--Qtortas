<?php session_start();
    require 'config.php';
    require '../funciones.php';

    if(!$_SESSION['admin']){
        header('Location:'.RUTA.'/admin');
    }else{
        $conexion = db_conexion($qtortas_db['db_name'], $qtortas_db['db_usuario'], $qtortas_db['db_contraseña']);
        if(!$conexion){
            die("Propio: Error en base de datos");
        }

        $id=(int)limpiarDatos($_GET['id']);
        $torta = tablaId($conexion, $qtortas_db['tabla_catalogo'], $id);

        if($_SERVER['REQUEST_METHOD']=="POST"){

            $nombre=limpiarDatos($_POST['nombre']);
            $descripcion=limpiarDatos($_POST['descripcion']);
            $img_guardada=$_POST['img-guardada'];
            $nueva_img=$_FILES['imagen'];
            $fondo_guardado=$_POST['fondo-guardado'];
            $nuevo_fondo=$_FILES['fondo-img'];
    
            if(empty($nueva_img['name'])){
                $nueva_img=$img_guardada;
            }else{
                $archivo_subido = RUTA.$qtortas_config['carpeta_img'].'/'.$_FILES['imagen']['name'];
                move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo_subido);
                $nueva_img = $_FILES['imagen']['name'];
            }
    
            if(empty($nuevo_fondo['name'])){
                $nuevo_fondo=$fondo_guardado;
            }else{
                $archivo_subido = RUTA.$qtortas_config['carpeta_img'].'/'.$_FILES['fondo-img']['name'];
                move_uploaded_file($_FILES['fondo-img']['tmp_name'], $archivo_subido);
                $nueva_img = $_FILES['fondo-img']['name'];
            }
            $id=limpiarDatos($_POST['id']);
    
            tablaEditar($conexion, $qtortas_db['tabla_catalogo'], $id, $nombre, $descripcion, $nueva_img, $nuevo_fondo);
            header('Location:'.RUTA."/admin");
        }
    }

    require '../views/editar.view.php';
?>