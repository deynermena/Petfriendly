<?php
    $data = file_get_contents("php://input");
    require "conexion.php";
    $query = $pdo->prepare("DELETE FROM mascotas WHERE ID = :ID");
    $query->bindParam(":ID", $data);
    $query->execute();
    echo "ok";
?>