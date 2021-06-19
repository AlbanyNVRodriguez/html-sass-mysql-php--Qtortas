<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
    <link rel="stylesheet" href="<?php echo RUTA?>/css/styles.css">
</head>
<body data-barba="wrapper">
    <div class="wrap" data-barba="container" data-barba-namespace="home">
        <!-- SECCION DEL PANEL ADMINISTRATIVO -->
        <section class="contenedor cont-admin">
            <h1>PANEL ADMINISTRATIVO</h1>
            <div class="opciones">
                <a href="<?php echo RUTA;?>/admin/crear_articulo.php" class="opcion op-1">Crear Articulo</a> 
                <a href="<?php echo RUTA;?>/admin/cerrar_sesion.php" class="opcion op-2">Cerrar Sesion</a> 
            </div>
            <?php foreach($tortas as $torta):?>
                <article>
                    <div class="art-img" style="background-image: url(<?php echo RUTA. $qtortas_config['carpeta_img'].'/'.$torta['fondo'];?>)">
                        <img src="<?php echo RUTA.$qtortas_config['carpeta_img'].'/'.$torta['img'];?>" alt="<?php echo $torta['img'];?>" alt="">
                    </div>
                    <div class="art-texto">
                        <h2><?php echo $torta['nombre'];?></h2>
                        <p class="descripcion">
                            <?php echo $torta['descripcion'];?>
                        </p>
                        <p class="otro"><b>imagen:</b><i> <?php echo $torta['img'];?></i></p>
                        <p class="otro"><b>fondo:</b><i> <?php echo $torta['fondo'];?></i></p>
                    </div>
                    <div class="herramientas">
                        <a href="<?php echo RUTA;?>/admin/editar.php?id=<?php echo $torta['id'];?>">Editar</a>
                        <a href="<?php echo RUTA;?>/torta_info.php?id=<?php echo $torta['id'];?>">Ver</a>
                        <a href="<?php echo RUTA;?>/admin/eliminar_articulo.php?id=<?php echo $torta['id'];?>">Eliminar</a>
                    </div>
                </article>
            <?php endforeach;?>

            <div class="paginacion">
                <?php if($paginaActual==1):?>
                    <a href="#" class="disabled"><<</a>
                    <a href="#" class="disabled"><</a>
                <?php else:?>
                    <a href="<?php echo 'index.php?p=1'; ?>" class=""><<</a>
                    <a href="<?php echo 'index.php?p='.($paginaActual - 1); ?>" class=""><</a>
                <?php endif;?>

                <?php for($i=1;$i<=$paginacion;$i++):?>
                    <?php if($i==$paginaActual):?>
                        <a href="<?php echo 'index.php?p='.$i?>" class="activa"><?php echo $i?></a>
                    <?php else:?>
                        <a href="<?php echo 'index.php?p='.$i?>" class=""><?php echo $i?></a>
                    <?php endif;?>
                <?php endfor;?>

                <?php if($paginaActual==$paginacion):?>
                    <a href="#" class="disabled">></a>
                    <a href="#" class="disabled">>></a>
                <?php else:?>
                    <a href="<?php echo 'index.php?p='.($paginaActual + 1); ?>" class="">></a>
                    <a href="<?php echo 'index.php?p='.$paginacion; ?>" class="">>></a>
                <?php endif;?>
            </div>
        </section>
<?php require '../footer.php'?>