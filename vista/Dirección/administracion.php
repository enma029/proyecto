<?php
    require_once"../../php/conexion/conexion.php";
    // EDITAR DEPARTAMENTO
    if(isset($_POST["editar"])){
        
        $id=$_POST['id-usuario'];
        $nombre_departamento=$_POST['nombre-departamento'];
        $contraseña_nueva=$_POST['nueva-contraseña'];
            
            if( $id !== "" && $nombre_departamento !=="" &&  $contraseña_nueva !== ""){
                $server= new server();
                $PDO= $server->conexion();
                
                $insertar = $PDO->prepare("UPDATE `usuarios` SET nombre = :nombre, contraseña = :contrasena WHERE `usuario_id` = :id");
                $insertar->bindParam(":nombre", $nombre_departamento);
                $insertar->bindParam(":contrasena", $contraseña_nueva);
                $insertar->bindParam(":id", $id);
                    $insertar->execute();

header("Location: " . $_SERVER['PHP_SELF']);        
exit();
}
};

// eliminar
    if($_GET['id_eliminar']){
        $id_a_borrar = $_GET["id_eliminar"];
    
    if ($id_a_borrar !== "") {
        $server = new server();
        $PDO = $server->conexion();
        
        $eliminar = $PDO->prepare("DELETE FROM `usuarios` WHERE `usuario_id` = :id, nombre = :nombre, contraseña = :contrasena ");
        $eliminar->bindParam(":id", $id_a_borrar);
        $eliminar->bindParam(":nombre", $id_a_borrar);
        $eliminar->bindParam(":contrasena", $id_a_borrar);
        $eliminar->execute();

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
    }
?>
