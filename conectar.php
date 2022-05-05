<?php

class conectar {
    private $servidor="localhost";
    private $usuario="dwesDAW";
    private $pass="1234";
    private $bd="socios";

    public function conexion(){
        $conexion=mysqli_connect($this->servidor, $this->usuario, $this->pass, $this->bd);

        return $conexion;
    }

    
    
}