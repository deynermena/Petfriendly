<?php
include("conexion.php");

if(isset($_POST["send"])){
    if(
       strlen($_POST["name"])>= 1 &&
       strlen($_POST["phone"])>= 1 &&
       strlen($_POST["email"])>= 1 &&
       strlen($_POST["message"])>= 1  
    ){
        $name=trim($_POST["name"]);
        $phone=trim($_POST["phone"]);
        $email=trim($_POST["email"]);
        $message=trim($_POST["message"]);
        $consultas="INSERT INTO consultasprevias(nombre, telefono, email, mensaje)
        values('$name','$phone','$email','$message')";
        $resultado =mysqli_query($conex,$consultas);
    }
}


?>