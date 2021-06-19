<?php require "../navbar.php"?>
<!-- SECCION DE LOGIN DEL ADMIN -->
<section class="contenedor cont-login-admin">
    <h1>INICIO DE SESION</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <input type="text" name="usuario" id="usuario" placeholder="usuario">
        <input type="password" name="pass" id="contraseña" placeholder="contraseña">
        <?php if(isset($errores)):?>
            <li class="errores"><?php echo $errores?></li>
        <?php endif;?>
        <input type="submit" value="Inicia Sesion">
    </form>
</section>
<?php require '../footer.php'?>
