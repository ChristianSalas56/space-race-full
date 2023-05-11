<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <form method="post">
        <section class="form-login">
            <h5>Registrate</h5>
            <input class="controls" type="text" name="nombre" value="" placeholder="Usuario">
            <input class="controls" type="email" name="email" value="" placeholder="Email">
            <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
            <input class="buttons" type="submit" name="registrar" value="Registrar">  
            <p><a href="sesion.php">¿Ya tienes cuenta?</a></p>
        </section>
    </form> 
    <?php
        include('../include/registro.php');
    ?>
</body>
</html>