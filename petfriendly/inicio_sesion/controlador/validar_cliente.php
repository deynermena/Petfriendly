<?php
session_start();
if (!empty($_POST["inicio"])) {
    if (!empty($_POST['Correo']) and !empty($_POST['Contraseña'])) {
        $Correo=$_POST["Correo"];
        $Contraseña=$_POST["Contraseña"];
        $sql=$conexion->query("select * FROM clientes WHERE Correo='$Correo' and Contraseña='$Contraseña' ");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["Correo"]=$datos->Correo;
            $_SESSION["Nombre"]=$datos->Nombre;
            header("location: /petfriendly/menu_usuario/menu_cliente.php");
        } else {
            echo "<div>Un dato es erroneo</div>";
        }
        
    } elseif (empty($_POST['Correo']) and empty($_POST['Contraseña'])) {
        echo('Los campos estan vacios');
    }elseif(empty($_POST['Correo']) and !empty($_POST['Contraseña'])) {
        echo ('Debes ingresar un correo');
    } elseif(empty($_POST['Contraseña']) and !empty($_POST['Correo'])){
        echo('Ingresar una contraseña');
    }
    
}

?>


