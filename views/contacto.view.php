<?php require 'navbar.php'?>
<!-- SECCION DE CONTACTO -->
<section class="contenedor cont-contacto">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <input type="text" name="nombre-cliente" id="nombre-cliente" placeholder="Nombre y Apellido">
            <div class="tipo-torta">
                <label for="tipo-torta">Tipo de Torta</label>
                <input type="radio" name="tipo-torta" id="tipo-torta" value="1">
                <input type="radio" name="tipo-torta" id="tipo-torta" value="2">
            </div>
            <div class="tamano-torta">
                <label for="tamano-torta">Tamaño de Torta</label>
                <input type="radio" name="tamano-torta" id="tamano-torta" value="1">
                <input type="radio" name="tamano-torta" id="tamano-torta" value="2">
            </div>
            <textarea name="descripcion" id="descripcion" placeholder="Ejem: color azul con fresas y oreo"></textarea>
            <input type="submit" value="¡ Pedir !">
        </form>
        <div class="map">
            <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure illo quasi tenetur.</h4>
            <div class="direccion">
            </div>
        </div>
</section>
<?php require 'footer.php'?>