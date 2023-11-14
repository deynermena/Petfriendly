<?php
if (!empty($_POST["inicio"])) {
    if (!empty($_POST['ID']) and !empty($_POST['Contraseña'])) {
        $ID=$_POST["ID"];
        $Contraseña=$_POST["Contraseña"];
        $sql=$conexion->query("select * FROM doctores WHERE ID='$ID' and Contraseña='$Contraseña' ");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["Nombre"]=$datos->Nombre;
            $_SESSION["ID"]=$datos->ID;
            header("location: /petfriendly/menu_usuario/menu_veterinario.php");
        } else {
            echo "<div>Un dato es erroneo</div>";
        }
        
    } elseif (empty($_POST['ID']) and empty($_POST['Contraseña'])) {
        echo('Los campos estan vacios');
    }elseif(empty($_POST['ID']) and !empty($_POST['Contraseña'])) {
        echo ('Debes ingresar un ID');
    } elseif(empty($_POST['Contraseña']) and !empty($_POST['ID'])){
        echo('Ingresar una contraseña');
    }
    
}

?>