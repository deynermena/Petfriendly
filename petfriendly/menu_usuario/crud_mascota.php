<?php

public function insertar($mascotas,$data){
        $mascotas='insert into'. $mascotas.'values(null,'.$data.')';
        $resultado=$this->db->query($cliente);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    public function mostrar($mascotas,$condicion){
        $consul="select*from".$mascotas."where".$condicion.";";
        $resu=$this->db->query($consul);
        while($filas=$resu->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos[]=$filas;
        }
        return $this->datos;
    }

    public function actualizar($mascotas,$data,$condicion){
        $actuali="update". $mascotas ."set". $data . "where". $condicion;
        $resul=$this->db->query($clientes)
        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    public function eliminar($mascotas,$condicion){
        $eli="delete from".$mascotas."where".$condicion;
        $res=$this->db->query($eli);
        if($res){
            return true;
        }else{
            return false;
        }
    }


?>