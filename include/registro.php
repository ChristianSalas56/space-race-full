<?php

include('con_db.php');

if (isset($_POST['registrar'])) {
    if(strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['contrasena']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $contrasena = trim($_POST['contrasena']);
        $fechareg = date('d/m/y');
        $consulta = "INSERT INTO datos(nombre, email, contrasena, fecha_reg) VALUES ('$nombre','$email','$contrasena','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">Se ha completado correctamente</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">Ups ha ocurrido un error</h3>
            <?php
        }
    }   else {
        ?>
        <h3 class="bad">Porfavor completar los campos</h3>
        <?php
    }
}

?>