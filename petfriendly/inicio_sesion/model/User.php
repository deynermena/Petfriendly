<?php

class User{
    Private $ID;
    private $Nombre;
    private $Correo;
    private $Contraseña
    private $Telefono;
    private $db;
    
    public function __construct(){
        $this->db=Database::connect();
    }

    public function getID(){
        return $this->ID;
    }
    public function setID($ID){
        $this->ID=$this->db->real_scape_string($ID);
    }
    public function getNombre(){
        return $this->Nombre;
    }
    public function setNombre($Nombre){
        $this->Nombre=$this->db->real_scape_string($Nombre);
    }
    public function getCorreo(){
        return $this->Correo;
    }
    public function setCorreo($Correo){
        $this->Correo=$this->db->real_scape_string($Correo);
    }
    public function getContraseña(){
        return password_hash($this->db->real_scape_string($this->Contraseña),PASSWORD_BCRYPT,['COST'=>4]);
    }
    public function setContraseña($Contraseña){
        $this->Contraseña=$this->db->real_scape_string($Contraseña);
    }
    public function getTelefono(){
        return $this->Telefono;
    }
    public function setTelefono($Telefono){
        $this->Telefono=$this->db->real_scape_string($Telefono);
    }

    public function save(){
        $sql="INSERT INTO clientes VALUES(null,'{$this->getID()}','{$this->getNombre()}','
        {$this->getCorreo()}','{$this->getContraseña()}','{$this->getTelefono()}";
        $save=$this->db->query($sql);
        $result = false;
        if($save){
            $result=true;
        }
        return $result;
    }

    public function login(){
        $resultado=false;
        $Correo=$this->Correo;
        $Contraseña=$this->Contraseña;

        $sql="SELECT * FROM clientes WHERE Correo='$Correo'";
        $login=$this->db->query($sql);
        if($login && $login->num_rows==1){

            $usuario=$login->fetch_object();
            $verify=password_verify($Contraseña,$usuario->Contraseña);
            if($verify){
                $resultado=$usuario;
            }
        }
        return $resultado;
    }
}


//CLIENTES



/*
CLASE USER.PHP(video)

include_once 'db.php';

class User extends db{
    Private $ID;
    private $Nombre;
    private $Correo;
    private $Contraseña
    private $Telefono;

    public function UserExists($user,$pass){
        $md5pass=md5($pass);

        $query=$this->connect()->prepare('SELECT * FROM Clientes WHERE email = :user AND password = :pass')
        $quuery->execute(['user'=>$user, 'pass'=>$md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query=$this->connect()->prepare('SELECT * FROM Clientes WHERE email = :user')
        $query->execute(['user' => $user]);

        foreach($query as $currentUser){
            $this->user=$currentUser['Nombre'];
            $this->email=$currentUser['email'];
        }
    }

    public function getNombre(){
        return $this->nombre
    }
}
*/

?>