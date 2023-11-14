<?php

if(!empty($_SESSION["Correo"])){
    header ("location:../../menu_usuario/menu_cliente.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link rel="shortcut icon" href="/petfriendly/iconos/huella2.jpg"/>
    <link rel="stylesheet" href="style_cliente.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    
    <div class="cliente">
        <form method="POST">
            <h2>INGRESAR</h2>

            <?php
            include "../controlador/db.php";
            include "../controlador/validar_cliente.php";
            ?>

            <div class="input-group">
                
                <i class='bx bxs-envelope bx-lg'></i>
                <div class="input-container">
                <input type="email" name="Correo" placeholder="Correo"></p>
                </div>

                <i class='bx bxs-lock-alt bx-lg'></i>
                <div class="input-container">
                <input type="password" name="Contraseña" placeholder="Contraseña"></p>
                </div>
            </div>

            <input name="inicio" class="btn" type="submit" value="Iniciar sesion">


        </form>

        <div class="link-registrarse">
            <p>¿Aun no eres cliente? <a href="registro_cliente.php">Registrate</a> </p>
        </div>

        <div class="vuelta">
            <button type="input" class="btn" onclick="goBack()">Volver</button>
        </div>
    </div>

    <script>
        function goBack() {
            window.location.href="http://localhost/petfriendly/inicio_sesion/link.php";
        }
    </script>

</body>
</html>
