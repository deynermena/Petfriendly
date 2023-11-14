<?php
if (isset($_POST['registrar'])) {
    $Tipomascota = $_POST['Tipomascota'];
    $Nombre = $_POST['Nombre'];
    $Raza = $_POST['Raza'];
    $ID = $_POST['ID'];
    require("conexion.php");
    if (empty($_POST['idp'])){
        $query = $pdo->prepare("INSERT INTO mascotas (Tipomascota, Nombre, Raza) VALUES (:Tipo, :Nombre, :Raza)");
        $query->bindParam(":Tipo", $Tipomascota);
        $query->bindParam(":Nombre", $Nombre);
        $query->bindParam(":Raza", $Raza);
        $query->execute();
        $pdo = null;
        echo "ok";
    }else{
        $ID = $_POST['idp'];
        $query = $pdo->prepare("UPDATE mascotas SET Tipomascota = :Tipo, Nombre = :Nombre, Raza =:Raza WHERE ID = :ID");
        $query->bindParam(":Tipo", $Tipomascota);
        $query->bindParam(":Nombre", $Nombre);
        $query->bindParam(":Raza", $Raza);
        $query->bindParam("ID", $ID);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }
    
}
