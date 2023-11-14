<?php
session_start();
if(!empty($_SESSION["Correo"])){
    header ("location:../menu_usuario/menu_cliente.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Que soy?</title>
    <link rel="shortcut icon" href="/petfriendly/iconos/huella2.jpg"/>
    <link rel="stylesheet" href="style_link.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <ul>
        <div class="regresar">
        <button onclick="goBack()" ><i class='bx bxs-chevron-left bx-md' ></i>Volver</button>
        </div>

    <main class="usuario">
        <h2>¿Que eres?</h2>
        <div class="seleccion-usuario">

        <div class="usuario1">
            <a href="vistas/login_cliente.php">
                <i class='bx bxs-user bx-lg' ></i>
                <div class="sfm_itemTitle">Cliente</div>
            </a>

  
        </div>


        <div class="usuario2">
            <a href="vistas/login_veterinario.php">
                <i class='bx bxs-first-aid bx-lg' ></i>
                <div class="sfm_itemTitle">Veterinario</div>
            </a>
        </div>

        </div>
    </main>


<script>
function goBack() {
    window.location.href="http://localhost/petfriendly/index.php";
}
</script>
    </ul>
    
</body>
</html>