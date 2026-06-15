<?php
    require_once "php/conexion/conexion.php";
    session_start();

    if (isset($_POST['user']) && isset($_POST['contra'])) {
        $usuario = trim($_POST['user']);
        $contraseña = trim($_POST['contra']);

        if ($usuario !== "" && $contraseña !== "") {
            $sql = new server();
            $PDO = $sql->conexion();
            
            $datos = $PDO->prepare('SELECT * FROM `usuarios` WHERE `nombre` = :user AND `contraseña` = :contra');

            $datos->execute([
                ':user'  => $usuario,
                ':contra' => $contraseña
            ]);

            if ($datos->rowCount() > 0) {
                $usuario_logeado = $datos->fetchObject();

                $_SESSION['usuario_id'] = $usuario_logeado->usuario_id;
                $_SESSION['usuario_nombre'] = $usuario_logeado->nombre;

                switch ($usuario_logeado->usuario_id) {
                    case 1:
                        header("Location: vista/Dirección/Direccion.php");
                        break;

                    case 2:
                        header("Location: vista/Atención al Ciudadano/atencion_al_ciudadano.php");
                        break;
                        
                    case 3: 
                        header("Location: vista/Atencion al desarrollo/desarrollo.php");
                        break;
                        
                    case 4: 
                        header("Location: vista/Banavih/banavih.php");
                        break;
                    
                    case 5: 
                        header("Location: vista/Gestion humana/humana.php");
                        break;
                    case 6:
                        header("Location: vista/Intu/intu.php");
                        break;
                    case 7: 
                        header("Location: vista/Redes Populares/Redes.php");
                        break;            
                    case 8:
                        header("Location: vista/Sunavi/sunavi.php");
                        break; 

                    default:
                        header("Location: index.php");
                        break;
                }
                exit();
            } else {
                echo "<script>alert('El usuario o la contraseña son incorrectos.');</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministerio del Poder Popular para el Hábitat y La Vivienda – MINHVI</title>
    <link rel="icon" type="image/x-icon" href="imagenes/descarga (1)-Photoroom.png">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <!-- -----login---- -->
        <header class="header-logos">
            <img class="header-img img__ministerio" src="imagenes/1-removebg-preview.png">
                <a class="minhvi" href="https://www.minhvi.gob.ve/minhvi/">
            <img class="header-img img__misión" src="imagenes/Gran Misión.png" alt="" >
            </a>
        </header>
            <main class="login-content">
                <div class="main-conteiner">
                    <div class="main-conteiner-img">
                        <img class="main-img" src="imagenes/logo.png" alt="">
                        </div>
                            <h2>INICIO DE SESIÓN</h2>

        <!-- -------form------- -->
        <form action="" class="login-form" id="form" onsubmit="return Validar_input(this)" method="post">

            <div class="form-grupo grupo-1">
                <img class="id-card-line" src="iconos/id-card-line.png">
                    <input class="form-input" id="login_input_usuario" type="text" placeholder="Nombre de Usuario" maxlength="20" name="user">
                        <p class="requerido">Se requiere un identificador de usuario para proceder.</p>
            </div>
                    <div class="form-grupo grupo-2">

                        <img class="lock-fill" src="iconos/lock-fill.png" alt="">
                            <input class="form-input" id="login_input_contraseña" type="password" placeholder="Contraseña" name="contra" maxlength="16">

                                <input class="password-toggle" type="checkbox"  id="selector" onclick="login_input_contraseña.type = this.checked? 'text': 'password'">                                
                                    <label for="selector" class="eye-button">
                                        <img class="eye-closed" src="iconos/eye.svg" id="check-visible">
                                        <img class="eye-open" src="iconos/eye-fill.svg" >
                                    </label>    
                                        <p class="requerido-contra">Introduzca su clave de seguridad</p>
                    </div>
                        <div class="form-intro-box">
                                <button class="form-intro" type="submit">ENTRAR</button>
                            </div>
                                </form>
                        </div>    
                </main>
        </div>        
</body>
</html>