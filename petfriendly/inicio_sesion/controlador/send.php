<?php

if(!empty ($_POST["Registrarse"])){
    if (empty($_POST["ID"]) or empty($_POST["Nombre"]) or empty($_POST["Correo"]) or empty($_POST["Contraseña"]) or empty($_POST["Telefono"])) {
        echo ('Debes llenar todos los datos');
    }else{
        $ID=$_POST["ID"];
        $Nombre=$_POST["Nombre"];
        $Correo=$_POST["Correo"];
        $Contraseña=$_POST["Contraseña"];
        $Telefono=$_POST["Telefono"];
        $sql=$conexion->query("insert into clientes(ID,Nombre,Correo,Contraseña,Telefono)values('$ID','$Nombre','$Correo','$Contraaseña','$Telefono')");
    }
}


    
    
?>









