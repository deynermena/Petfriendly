<?php
session_start();
if(empty($_SESSION["Correo"])){
    header ("location:../inicio_sesion/vistas/login_cliente.php");
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
                        <li><a name="cerrar_cli" href="../inicio_sesion/controlador/logout.php" >Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="header-content container">
                <div class="header-txt">
                    <h1>Mascotas</h1>
                    <div>
                        <p>Bienvenido(a), <?php echo ($_SESSION["Nombre"])?>. </p>
                <table >
		            <tr>
			            <th>ID</th>
			            <th>Nombre</th>
                        <th>Proxima vacuna</th>
			            <th>Proximo baño</th>
		            </tr>

		            <?php
		                $sql="SELECT * from mascotas";
		                $result=mysqli_query($conexion,$sql);

		            while($mostrar=mysqli_fetch_array($result)){
		            ?>

		            <tr>
			            <td><?php echo $mostrar['ID'] ?></td>
                        <br></br>
                        <td><?php echo $mostrar['Nombre'] ?></td>
		            </tr>
	        <?php
	        }
        


	        ?>
	</table>
<br></br>
                        <a href="../menu_usuario/controlador/index.php">Editar mascotas</a>
                        <br></br>
                        <p>Agrega mascotas, Edita sus datos o eliminalas si ya no estan contigo.</p>
                        
                    </div>
                </div>
            </div>
        </header>
    
        </div>
    </header>

</body>
</html>