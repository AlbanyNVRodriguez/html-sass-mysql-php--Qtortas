<?php session_start();
    require 'config.php';
    require '../funciones.php';
    if(isset($_SESSION['admin'])){
        header("Location:".RUTA."/admin");
    }
    var_dump($_SESSION);
    // header('Location:index.php');
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $usuario=limpiarDatos($_POST['usuario']);
        $pass=limpiarDatos($_POST['pass']);

        if(!empty($usuario) && !empty($pass)){
            $conexion = db_conexion($qtortas_db['db_name'], $qtortas_db['db_usuario'], $qtortas_db['db_contraseña']);
            if(!$conexion){
                die("Propio: Error en base de datos");
            }

            $resultado=comprobarAdmin($conexion, $qtortas_db['tabla_admin'], $usuario, $pass);
            if($resultado){
                $_SESSION['admin']=$usuario;
                header('Location:index.php');
            }else{
                $errores="usuario o contraseña incorrectas";
            }
        }else{
            $errores="rellene todos los campos";
        }
    }
    $seccion="Admin";
    require '../views/login_admin.view.php';
?>