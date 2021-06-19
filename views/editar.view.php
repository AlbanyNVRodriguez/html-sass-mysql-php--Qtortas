<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo - Editar</title>
    <link rel="stylesheet" href="<?php echo RUTA?>/css/styles.css">
</head>
<body data-barba="wrapper">
    <div class="wrap" data-barba="container" data-barba-namespace="home">
        <!-- SECCION DEL PANEL ADMINISTRATIVO -->
        <section class="contenedor cont-editar-admin">
        <h1>Editar - <?php echo $torta['nombre']?></h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

            <input type="hidden" name="id" value="<?php echo $torta['id']?>">
            <input type="text" name="nombre" id="nombre" value="<?php echo $torta['nombre'];?>">
            <textarea name="descripcion" id="descripcion" ><?php echo $torta['descripcion'];?></textarea>
            <label for="imagen">Imagen del Producto</label>
            <input type="file" name="imagen" id="imagen">
            <input type="hidden" name="img-guardada" value="<?php echo $torta['img']?>">

            <label for="fondo-img">Su Fondo</label>
            <input type="file" name="fondo-img" id="fondo-img">
            <input type="hidden" name="fondo-guardado" value="<?php echo $torta['fondo']?>">

            <?php if(isset($errores)):?>
                <li class="errores"><?php echo $errores?></li>
            <?php endif;?>
            <input type="submit" value="Guardar Cambios">
            <a href="index.php" class="btn btn-cancelar">Cancelar</a>
        </form>
        </section>
<?php require '../footer.php'?>