<?php require 'navbar.php'?>
<!-- SECCION DE CATALOGO -->
<section class="contenedor cont-catalogo">
    <div class="tortas">
        <?php foreach($tortas as $torta):?>
            <a href="torta_info.php?id=<?php echo $torta['id']?>">
                <img src="<?php echo RUTA.$qtortas_config['carpeta_img'].'/'.$torta['img'];?>" alt="<?php echo $torta['img'];?>">
            </a>
        <?php endforeach;?>
    </div>
</section>
<?php require 'footer.php'?>
