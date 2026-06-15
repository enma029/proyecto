    <link rel="stylesheet" href="style_main.css">
    <main>
        <div class="Titulo">
            <h2>Panel de Solicitudes Recientes</h2>
            <p class="descripcion">Gestión de trámites ciudadanos, revisión de recaudos y transferencias institucionales.</p>
        </div>
        <div class="Solicitudes-box">
                <div class="Solicitudes recientes" >
                    <h3>Total Recientes</h3>
                    <h4>8</h4>
                    <Img class="img-solicitudes" src="../../iconos/paper.png">
                </div>
                <div class="Solicitudes Solicitud-revisión" >
                    <h3>En Revisión</h3>
                    <h4>10</h4>
                    <img class="img-solicitudes" src="../../iconos/time.png" alt="">
                </div>
                <div class="Solicitudes faltan-recaudo">
                    <h3>Faltan Recaudos</h3>
                    <h4 style="color: rgba(255, 0, 0, 0.668);">0</h4>

                    <img class="img-solicitudes" src="../../iconos/warning.png" alt="">
                </div>
                <div class="Solicitudes completos">
                    <h3>Finalizadas</h3>
                    <h4 style="color:rgba(5, 141, 5, 0.584);">4</h4>
                    <img class="img-solicitudes" src="../../iconos/correct.png" alt="">
                </div>
        </div>
            <div class="table-box">    
                <div class="title-box">
                    <h3 style="color:rgba(14, 8, 36, 0.822); font-size: 24px;
                padding-bottom: 16px; padding-top: 24px;">Gestión de Trámites Activos</h3>
                        <div class="opcion-busqueda">
                                <input class="Buscar" type="text" placeholder=" Buscar Cédula...">

                                        <select class="opcion " name="" id="">
                                            <option value="all">Todos los Departamentos</option>
                                            <option value="SUNAVI">SUNAVI</option>
                                            <option value="BANAVIH">BANAVIH</option>
                                            <option value="INTU">INTU</option>
                                            <option value="Gestión Humana">Gestión Humana</option>
                                            <option value="Redes Populares">Redes Populares</option>
                                        </select>
                        </div>
                </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Ciudadano</th>
                                    <th>Cédula</th>
                                    <th>Trámite Solicitado</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="date"></td>
                                    <td>Carmen Ortíz</td>
                                    <td>V-14.225.802</td>
                                    <td>Adjudicación de Vivienda</td>
                                    <td >
                                        <span class="estado revisión">En Revisión</span>
                                    </td>
                                    <td>
                                        <a class="revisar" href="../../php/menu/revisar/Revisar.php">
                                            Revisar ➔
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td >José Gregorio Ramos</td>
                                    <td>V-8.452.190</td>
                                    <td>Regularización de Título de Propiedad</td>
                                    <td>
                                        <span class="estado falta">Falta Recaudo</span>
                                    </td>
                                    <td>
                                        <a class="revisar" href="./Revisar.html">
                                            Revisar ➔
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Elena María Pérez</td>
                                    <td>V-11.940.003</td>
                                    <td>Liberación de Hipoteca (BANAVIH)</td>
                                    <td>
                                        <span class="estado  listo">Listo</span>
                                    </td>
                                    <td>
                                        <a class="revisar" href="./Revisar.html">
                                            Revisar ➔
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Luis Alejandro Rondón</td>
                                    <td>V-11.940.003</td>
                                    <td>Liberación de Hipoteca (BANAVIH)</td>
                                    <td>
                                        <span class="estado listo">Listo</span>
                                    </td>
                                    <td>
                                        <a class="revisar" href="../revisar/Revisar.php">
                                            Revisar ➔
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Marcos Aurelio Guerra</td>
                                    <td>V-15.340.211</td>
                                    <td>Registro de Vivienda Multifamiliar</td>
                                    <td >
                                        <span class="estado revisión">En Revisión</span>
                                    </td>
                                    <td>
                                        <a class="revisar" href="./Revisar.html">
                                            Revisar ➔
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Yaritza Colmenares</td>
                                    <td>V-22.108.344</td>
                                    <td>Registro de Vivienda Alquilada (SUNAVI)</td>
                                    <td>
                                        <span class="estado falta">Falta Recaudo</span>
                                    </td>
                                    <td>
                                        <a class="revisar" href="./Revisar.html">
                                            Revisar ➔
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Yaritza Colmenares</td>
                                    <td>V-22.108.344</td>
                                    <td>Registro de Vivienda Alquilada (SUNAVI)</td>
                                    <td>
                                        <span class="estado falta ">Falta Recaudo</span>
                                    </td>
                                    <td>
                                        <a class="revisar" href="./Revisar.html">
                                            Revisar ➔
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Yaritza Colmenares</td>
                                    <td>V-22.108.344</td>
                                    <td>Registro de Vivienda Alquilada (SUNAVI)</td>
                                    <td>
                                        <span class="estado listo">Listo</span>
                                    </td>
                                    <td>
                                        <a class="revisar" href="../../php/menu/revisar/Revisar.php">
                                            Revisar ➔
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Yaritza Colmenares</td>
                                    <td>V-22.108.344</td>
                                    <td>Registro de Vivienda Alquilada (SUNAVI)</td>
                                    <td>
                                        <span class="estado listo">Listo</span>
                                    </td>
                                    <td>
                                        <a class="revisar" href="./Revisar.html">
                                            Revisar ➔ ➔
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
    </main>