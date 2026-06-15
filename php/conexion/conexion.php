<?php
    class server{
        private $host="localhost";
        private $base_datos="base_de_datos_minhvi";
        private $user="root";
        private $password="";

        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->base_datos,$this->user,$this->password);
                return $PDO;
            } catch (PDOException $error){
                die("Error crítico: No se pudo conectar a la base de datos. " . $error->getMessage());
                }            
    } 
};
    // $nombre="jose";
    // $contra="1234";
    // $obj= new server();
    // $PDO=($obj->conexion());
    // $ejem = $PDO->prepare("insert into 
    // $ejem->bindParam(":nombre", $nombre);
    // $ejem->bindParam(":contrasena", $contra);
    // $ejem->execute();
    // $PDO->lastInsertId()
    
    // function conexion(){
    //     $sever= new PDO('Mysql:host=localhost;dbname=usuarios','root','');
    //     return $sever;
    // };


?>