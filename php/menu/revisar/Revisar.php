<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="revisar.css">
    <title>Revisar</title>
</head>
<body>
    <header class="top-bar">
            <div class="titulo">
                <label class="Titulo"><a href="atencion_al_ciudadano.html"><img src="../../../iconos/back-button.png" alt="atras"></a>Atencion al Ciudadano</label>
            </div>
                <a class="salida" href="/index.html">Salir</a>
        </header>
    <main>
    <form action="" class="contenedor-cuadro">
        <div class="Box-datos">
            <div class="header-box">
                <img class="ajustes-perfil" src="../../../iconos/profile.png" alt="Perfil del Visitante">
                <h3>Datos de Visitante</h3>
                    </div>
                        <div class="Datos">    
                            <div class="grupo-1" >
                                <div  class="Datos-input">
                                    <span>Fecha de Registro</span>
                                    <input type="date">
                                </div>
                                <div  class="Datos-input">
                                    <span>Cédula de Identidad</span>
                                    <input type="number" placeholder="Cédula V-00-000-000" maxlength="8" minlength="8">
                                </div>
                            </div>
                        
                <div class="grupo-2">
                    <div  class="Datos-input">
                        <span>Nombre</span>
                        <input type="text" placeholder="Nombre Completo">
                    </div>
                    <div  class="Datos-input">
                        <span>Apellido</span>
                        <input type="text" placeholder="Apellidos">
                    </div>
                </div>
                
                    </div>    
                        <div class="edad-sexo">
                            <div>
                                <span>FEMENINO</span>
                                <label><input type="radio" name="genero_edad"> Femenino (15-28 Años)</label>
                                <label><input type="radio" name="genero_edad"> Femenino (27-59 Años)</label>
                                <label><input type="radio" name="genero_edad"> Femenino (60 Años o más)</label>
                            </div>
                        
                            <div>
                                <span>MASCULINO</span>
                                <label><input type="radio" name="genero_edad"> Masculino (15-28 Años)</label>
                                <label><input type="radio" name="genero_edad"> Masculino (27-59 Años)</label>
                                <label><input type="radio" name="genero_edad"> Masculino (60 Años o más)</label>
                            </div>
                        </div>    
        <div class="discapacidad-telefono">
            <div class="discapacidad">
                <span>Discapacidad</span>
                <div class="pu">
                    <label><input type="radio" name="discapacidad" id=""> Si</label>
                    <label><input type="radio" name="discapacidad" id=""> No</label>
                </div>
                <select name="" id="">
                        <option value="SITUACIÓN DE CALLE">SITUACIÓN DE CALLE</option>
                        <option value="ARRIMADO">ARRIMADO</option>
                        <option value="ALTO RIESGO">ALTO RIESGO</option>
                        <option value="AL CUIDO">AL CUIDO</option>
                        <option value="REFUGIO O ALBERGUE">REFUGIO O ALBERGUE</option>
                    </select>
            </div>
            <div class="Telefono-box">
                <span>Telefono</span>
                <input class="telefono" type="number" placeholder="Número de Telefono">
            </div>    
        </div>
    
    <div class="ubicacion-container">
    <div class="ubicacion-header">
        <h4>Ubicación Geográfica del Visitante</h4>
    </div>

    <div class="ubicacion-inputs">
        
        <div class="campo-geografico">
            <span>ESTADO</span>
            <input type="text" value="Yaracuy">
        </div>

        <div class="campo-geografico">
            <span>MUNICIPIO</span>
            <input type="text" value="San Felipe">
        </div>

        <div class="campo-geografico">
            <span>PARROQUIA</span>
            <input type="text" value="Albarico">
        </div>

        </div>
    </div>
</div>

<!-- SEGUNDO CUADRO -->
    <div class="Inforamción-box">
        <div class="header-box">
            <img class="ajustes-perfil" src="../../../iconos/documentation.png" alt="">
            <h3>Documentación</h3>
        </div>

        <div class="estado-funcionario">
            <div class="funcionario">
                <div class="funcionario-opciones">
                    <span>Condición de Vulnerabilidad</span>
                    <select class="condicion " name="" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="funcionario-opciones">
                    <span >Funcionario Receptor</span>
                    <input type="text" maxlength="19" placeholder="Funcionario">
                </div>
            </div>

            <div class="Planificacion">
                <label style="display: block; margin-top: 20px; margin-left: 20px;" for=""><span style="color: #123469;font-size: 16px;" >Planificación de la Atención</span></label>

            <div class="input-planificacion">
                <div>
                    <label for=""><span>Indicador de Gestión</span><input type="text" maxlength="38"></label>
                </div>

                <div>
                    <label for=""><span>Actividad Relizada</span><input type="text" placeholder="Tipo de Solicitud"></label>
                </div>
            </div>
        </div>
        <div style="margin: 20px 0  10px 20px">
            <label for="" style="display: block; margin-left: 20px;"><span>Asuto / Motivo de la Visita </span></label>
            <input style="width: 93%;" type="text">
        </div>

        <div style=" margin: auto; width: 90%; margin-top: 16px;">
            <label for="" style="display: block; margin-bottom: 10px;"><span style="color: #123469;font-size: 14px;">Respuestas u Orientación Brindada</span></label>
            <textarea placeholder="Descripción de la respuesta o solución institucional brindada al visitante..." name="" id="" rows="3" cols="70"></textarea>
        </div>

        <div class="Seguimiento-box">
            <div class="seguimientos">
                <label for=""><span>Seguimiento 1</span></label>
                <input type="text">
            </div>
        
            <div class="seguimientos">
                <label for=""><span>Seguimiento 2</span></label>
                <input type="text" name="" id="">
            </div>

            <div class="seguimientos">
                <label for=""><span>Seguimiento 3</span></label>
                <input type="text">
            </div>
        </div>
    </div>
</form>        
</main>

</body>
</html>