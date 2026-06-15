<?php 
    session_start();

        if(!isset($_SESSION['usuario_id'])){
            header('Location: ../../index.php');
            exit();
        }elseif ($_SESSION['usuario_id'] != 1) {
            header('Location: ../../index.php');
        }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministerio del Poder Popular para el Hábitat y La Vivienda – MINHVI</title>
    <link rel="stylesheet" href="Direccion.css">
    <link rel="stylesheet" href="/fuente/fonts.css">
    <script src="direccion.js" defer ></script>
</head>
<body>
<!-- BARRA SUPERIOR -->
        <header class="top-bar">
                
            <div class="titulo">
                <span>Direccion</span>
            </div>

            <input type="checkbox" id="abrir">
            <label for="abrir">
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
                
                <a class="ajustes-opcion" href="cuentas-adminstracin.php">Administración de Cuentas</a>
                <a class="ajustes-opcion" href="#">Cambiar Contraseña</a>    
                <a class="ajustes-opcion" id="Salir" href="../../php/menu/cerrar/exit.php">Cerrar sesión</a>
        </div>
        </header>
        

    <div class="conteiner">    
    <img class="conteiner-img" src="../../imagenes/logo.png" alt="logo">
        <nav>
            <ul>
                
                <div class="conteiner-iconos">
                <a href="Direccion.php">    
                    <li style="padding-top: 20px;">Dirección</li>
                    <img class="iconos" src="../../iconos/home.png" alt="">
                </a>
                </div>

                <div class="conteiner-iconos">
                    <a href="../Atención al Ciudadano/atencion_al_ciudadano.php">
                    <li style="padding-top: 10px;">Atención al Ciudadano</li>
                    <img class="iconos" style="height: 30px; transform: translateY(-170%); padding-left: 18px;" src="../../iconos/team.png" alt="">
                    </a>
                </div>
                
                <div class="conteiner-iconos">
                    <a href="../Redes Populares/Redes.php">
                    <li style="padding-top: 10px;">Redes Populares en Vivienda</li>
                    <img class="iconos" style="height: 30px; padding-left: 18px;" src="../../iconos/conecction.png">
                    </a>
                </div>
                
                <div class="conteiner-iconos">
                    <a href="../Atencion al desarrollo/desarrollo.php">
                    <li >Atención de desarrollo Integral de Urbanismos</li>
                    <img src="../../iconos/self-development.png" style=" padding-left: 18px; transform: translateY(-200%); " alt="">
                    </a>
                </div>

                <div class="conteiner-iconos">
                    <a href="../Sunavi/sunavi.php">
                    <li style=" padding-top:20px;" >SUNAVI</li>
                    <img class="iconos" src="../../iconos/residential.png" alt="">
                    </a>
                </div>
                
                <div class="conteiner-iconos">
                    <a href="../Banavih/banavih.php">
                    <li style="padding-top: 20px;">BANAVIH</li>
                    <img class="iconos" src="../../iconos/money.png" alt="">
                    </a>
                </div>

                <div class="conteiner-iconos">
                    <a href="../Intu/intu.php">
                    <li style="padding-top: 20px;">INTU</li>
                    <img class="iconos" src="../../iconos/location-pin.png" alt="">
                    </a>
                </div>

                <div class="conteiner-iconos">
                    <a href="../Gestion humana/humana.php">
                    <li style="padding-top: 20px;">Gestión Humana</li>
                    <img class="iconos" src="../../iconos/project.png">
                    </a>
                </div>
            </ul>
        </nav>
    </div>
    
    <main>
        <div class="conteiner-graficas">
            <div class="main-div-solicitudes">
                <label class="tarea">Tareas Finalizadas(Hoy)</label>
                <img class="grafica" src="../../imagenes/2-removebg-preview.png" alt="">
                    <p class="cantidad-tarea">1.000</p>
            </div>
            
            <div class="main-div-pendiente">
                <label class="pendiente">Solicitudes Pendientes</label>
                <img class="grafica-radius" src="../../imagenes/3-removebg-preview.png" alt="">
                    <p class="cantidad-tarea">30</p>
            </div>
        </div>
        
    <div class="conteiner-tabla">
    <table>   
        <thead>
            <tr>
                <th>Departamento</th>
                <th>Tipo de Solicitud</th>
                <th>Segimento</th>
                <th>Aceptado/Denegado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>SUNAVI</td>
                <td>Desalogamineto</td>
                <td>1</td>
                <td>pendiente</td>
            </tr>

            <tr>
                <td>BANAVIH</td>
                <td>Liberación de Hipoteca</t>
                <td>3</td>
                <td>aceptado</td>
            </tr>

            <tr>
                <td>INTU</td>
                <td>Regularización de Tenencia</td>
                <td>0</td>
                <td>denegado</td>
            </tr>
        <tr>
            <td>Gestión Humana</td>
            <td>Reposo Médico</td>
            <td>2</td>
            <td>pendiente</td>
        </tr>
        <tr>
            <td>Redes Populares</td>
            <td>Censo de Vivienda</td>
            <td>1</td>
            <td>aceptado</td>
        </tr>
        <tr>
            <td>Atención al Ciudadano</td>
            <td>Queja Sugerencia</td>
            <td>0</td>
            <td>pendiente</td>
        </tr>
        <tr>
            <td>SUNAVI</td>
            <td>Conciliación de Canon</td>
            <td>3</td>
            <td>denegado</td>
        </tr>
    </tbody>
    </table>
    </div>
        </main>
</body>
</html>