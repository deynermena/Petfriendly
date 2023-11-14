
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style_registro.css">
    <link rel="shortcut icon" href="../../petfriendly/iconos/huella2.jpg"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <form method="POST" autocomplete="off">
        
        <h2>Registrate</h2>

        <?php
        include ("../controlador/conexion.php");
        include ("../controlador/send.php") ;
    ?>

        <div class="input-group">

            <div class="input-container">
                <i class='bx bx-id-card bx-md' ></i>
                <input type='int' name='ID' placeholder='ID'>
            </div>

            <div class="input-container">
                <i class='bx bxs-user bx-md' ></i>
                <input type='text' name='Nombre' placeholder='Nombre y apellidos'>
            </div>
    
            <div class="input-container">
                <i class='bx bx-envelope bx-md' ></i>
                <input type='email' name='Correo' placeholder='correo'>
            </div>

            <div class="input-container">
                <i class='bx bxs-lock bx-md' ></i>
                <input type='password' name='Contraseña' placeholder='Contraseña'>
            </div>

            <div class="input-container">
                <i class='bx bx-phone bx-md' ></i>
                <input type='tel' name='Telefono' placeholder='Telefono'>
            </div>
        </div>
    </form>

    
    <input class="btn" type="submit" name="Registrarse" value="Enviar">
        
        <div class="vuelta">
            <button type="input" class="btn1" onclick="goBack()">Cancelar</button>
        </div>

        <script>
        function myFunctcion(){
            window.location.href="http://localhost/petfriendly/inicio_sesion/vistas/login_cliente.php";
        }
    
    function goBack() {
        window.location.href="http://localhost/petfriendly/inicio_sesion/vistas/login_cliente.php";
    }
</script>

</body>
</html>