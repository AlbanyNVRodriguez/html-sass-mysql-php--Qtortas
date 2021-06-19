<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qtortas - <?php echo $seccion?></title>
    <link rel="stylesheet" href="<?php echo RUTA?>/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body data-barba="wrapper">
        <!-- MENU -->
        <nav class="navbar">
            <ul>
                <li><a href="<?php echo RUTA;?>"><img src="/src/logo.svg" alt="logo"></a></li>
                <li class="li"><a class="nav-item activa" href="<?php echo RUTA;?>">Inicio </a><div></div></li>
                <li class="li"><a class="nav-item " href="<?php echo RUTA.'/catalogo.php';?>">Catalogo </a><div></div></li>
                <li class="li"><a class="nav-item " href="<?php echo RUTA.'/contacto.php';?>">Contacto </a><div></div></li>
                <li class="redes">
                    <a class="red"></a>
                    <a class="red"></a>
                    <a class="red"></a>
                    <a class="red"></a>
                </li>
            </ul>
        </nav>
    <div class="wrap" data-barba="container" data-barba-namespace="home">