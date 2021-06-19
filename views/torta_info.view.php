<?php require 'navbar.php'?>
<section class="contenedor cont-torta" style="background-image: url(<?php echo RUTA.$qtortas_config['carpeta_img'].'/'.$torta['fondo'];?>)">
    <h1><?php echo $torta['nombre']?></h1>
    <div>
        <img src="<?php echo RUTA.$qtortas_config['carpeta_img'].'/'.$torta['img'];?>" alt="<?php echo $torta['img'];?>">
        <p><?php echo $torta['descripcion']?></p>
    </div>
    <a class="btn" href="<?php echo RUTA.'index.php'?>">¡Pedir!</a>
</section>
<?php require 'footer.php'?>
