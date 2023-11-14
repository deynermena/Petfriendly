<?php
session_start();
if(empty($_SESSION["ID"])){
    header ("location:../inicio_sesion/vistas/login_veterinario.php");
}
?>

<?php

	$conexion=mysqli_connect('localhost','root','','usuarios_registrados');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="/petfriendly/menu_usuario/css/style.css">
    <link rel="shortcut icon" href="/petfriendly/iconos/bx-user.svg" type="">
</head>

<body>
    <header>
        <div class="usuario">

        <header class="header">

            <div class="menu container">
                <a href="../index.php" class="logo">PF</a>
                <input type="checkbox" id="menu"/>
                <label for="menu">
                    <i class='bx bx-menu bx-sm' ></i>
                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="../vista/contacto.php">Soporte</a></li>
                        <li><a name="Cerrar_vete" href="../inicio_sesion/controlador/logout_vet.php" >Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="header-content container">
                <div class="header-txt">
                    <h1>pacientes</h1>
                    <div>
                    <p>Bienvenido(a), veterinario(a) <?php echo ($_SESSION["Nombre"])?>. </p>
                    <table >
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Proxima vacuna</th>
                            <th>Proximo baño</th>
                            <th>Dueño</th>
                        </tr>

                        <?php
		                    $sql="SELECT * from paciente";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                        ?>

                    <tr>
                        <td><?php echo $mostrar['ID'] ?></td>
                        <br></br>
                        <td><?php echo $mostrar['Nombre'] ?></td>
                        <br>
                        <td><?php echo ("...") ?></td>
                        <br></br>
                        <td></td>
                        <br>
                        <td><?php echo $mostrar['Dueño'] ?></td>
                    </tr>
                    <?php
                    }

                    ?>
	</table>
<br></br>
                        
                        <p>Estos son sus paciente veterinario(a) <?php echo ($_SESSION["Nombre"])?>.</p>
                        <br>
                        <p>Cualquier inquietud no dude en contactarnos Telefono: (671-9234523)   Correo: petfriendly@hotmail.com.</p>
                        
                    </div>
                </div>
            </div>
        </header>
    
        </div>
    </header>

</body>
</html>