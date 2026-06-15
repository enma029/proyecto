<?php
    include_once 'administracion.php';
    
    if(!empty($_GET['id'])){
        $id=$_GET['id'];
        $server = new server();
        $PDO = $server->conexion();
    
        $eliminar = $PDO->prepare("DELETE FROM `usuarios` WHERE `usuario_id` = :id");
        $eliminar->bindParam(":id", $id);
        $eliminar->execute();
    
        header("Location: cuentas-adminstracin.php");
        exit();
}
    
    ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Cuentas.css">
    <script src="Adm.js" defer></script>
    <title>Administración</title>
</head>
<body>
    <header class="top-bar">
                
            <a href="./Direccion.php" id="Atras"><img class="img-atras" src="../../iconos/back-button.png" alt="Atras"></a>

            <input type="checkbox" id="abrir">
            <label class=""abrir" for="abrir">
                <div class="Conteiner-perfil">
                    <img class="perfil" src="../../perfiles/perfil-d.png">
                </div>
            </label>

<!-- MENU DE PERFIL -->
            <div class="ajustes">
                <div class="ajustes-conteiner-perfil">
                            <img class="perfil-ajuste" src="../../perfiles/perfil-d.png">
                            <h3>Dirección</h3>
                </div>
                
                <a class="ajustes-opcion" href="cuentas-adminstracin.html">Administración de Cuentas</a>
                <a class="ajustes-opcion" href="#">Cambiar Contraseña</a>    
                <a class="ajustes-opcion" id="Salir" href="/index.html">Cerrar sesión</a>
        </div>
        </header>
        <main>
            <h2>Administración de Áreas</h2>
            <!-- <button class="Registrar-boton" id="Registrar-boton">Registrar</button> -->
            <div class="conteiner-tabla">
                <table class="custom-tabla">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Acción</th>
                    </tr>
                </thead>
            <tbody>
                <?php  
                        $server= new server();
                        $PDO= $server->conexion();
                            $sql= $PDO->query("SELECT * FROM `usuarios`");
                        while($datos=$sql->fetchObject()){?>
                            <tr>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->contraseña ?></td>
                                <td class="opciones"> 
                                        <a href="#" class="editar-a editar"  data-id="<?= $datos->usuario_id ?>" data-nombre="<?= htmlspecialchars($datos->nombre) ?>" data-contra="<?= htmlspecialchars($datos->contraseña) ?>"><img class="editar-img" src="../../iconos/edit.png" alt=""></a>
                                        
                                        <a href="cuentas-adminstracin.php?id=<?= $datos->usuario_id ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este departamento?');" class="borrar-a"><img class="borrar-img" src="../../iconos/delete.png" alt=""></a>
                                </td>
                            </tr>
                    <?php
                    }?>
            </tbody>
        </table>

        <!-- EDitar -->
        <div class="Modal-box Modal-box-desactivado">
            <div class="Modal-editar">
                <form action="" method="post">
                    
                <input type="hidden" id="id-editar" name="id-usuario">
                    <label class="label-modal" for="">Departamento</label>
                        <input class="input-modal" id="nombre-nuevo" name="nombre-departamento" placeholder="Nombre del Departamento" type="text" maxlength="70">
                    
                        <label class="label-modal" for="">Contraseña</label>
                        <input class="input-modal" id="contra-nueva" placeholder="Contraseña" type="text" minlength="4" maxlength="8" name="nueva-contraseña">

                    <div class="opcion">
                        <input  class="Enviar" type="submit" name="editar"> <button class="Cancelar" type="button">Cancelar</button>
                    </div>    
                </form>
            </div>
        </div>   
        <!-- REGISTRAR
        
            <div class="Modal-box  Registrar-desactivar">
                <div class="Registrar-modal">

                        <form action="" method="post">

                        <label class="label-modal" for="">Nombre del Departamento</label>

                            <input class="input-modal" id="Nombre-registrar" type="text" name="nombre-departamento" placeholder="Nombre del Departamento" minlength="4" maxlength="70">
                        
                        <label class="label-modal" for="">Contraseña</label>
                            <input class="input-modal" id="Contraseña-1" type="text" minlength="4" placeholder="Contraseña" maxlength="8" name="nueva-contraseña">
                        
                        <label  class="label-modal">Confirmar contraseña</label>
                            <input class="input-modal" id="Contraseña-2" type="password" placeholder="Confirme nuevamente la contraseña" minlength="4" maxlength="8">
                        <div class="opcion">
                            <input  class="Enviar" type="submit"> <button class="Cancelar" type="button">Cancelar</button>
                        </div>
                    </form>
                </div>     -->
            </div>
        </main>
</body>
</html>