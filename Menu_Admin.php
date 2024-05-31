<?php
    session_start();
    if(isset($_SESSION['user'])) {
        if ($_SESSION['tipo'] == 'A') {
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="Sidebar/style.css">
</head>
<body>
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="cloud" name="cloud-outline"></ion-icon>
                <span>Querétaro</span>
            </div>
            <button class="boton" onclick="cargarContenido('Form_GeneradorPDF.php')">
                <ion-icon name="add-outline"></ion-icon>
                <span>Generar PDF</span>
            </button>
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a onclick="toggleSubMenu('submenu1')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Centros Verificacion</span>
                    </a>
                </li>
                <ul id="submenu1" class="submenu">
                    <li>
                        <a onclick="cargarContenido('C_Centros_Verificacion.php')">
                            <span>Consulta</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('F_Centros_Verificacion.php')">
                            <span>Insertar</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('U_Centros_Verificacion.php')">
                            <span>Update</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('FD_Centros_Verificacion.php')">
                            <span>Borrar</span>
                        </a>
                    </li>
                </ul>
                
                <li>
                    <a onclick="toggleSubMenu('submenu2')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Conductores</span>
                    </a>
                </li>
                <ul id="submenu2" class="submenu">
                    <li>
                        <a onclick="cargarContenido('C_Conductores.php')">
                            <span>Consulta</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('F_Conductores.php')">
                            <span>Insertar</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('U_Conductores.php')">
                            <span>Update</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('FD_Conductores.php')">
                            <span>Borrar</span>
                        </a>
                    </li>
                </ul>
                <li>
                    <a onclick="toggleSubMenu('submenu3')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Direcciones</span>
                    </a>
                </li>
                <ul id="submenu3" class="submenu">
                    <li>
                        <a onclick="cargarContenido('C_Direcciones.php')">
                            <span>Consulta</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('F_Direcciones.php')">
                            <span>Insertar</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('U_Direcciones.php')">
                            <span>Update</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('FD_Direcciones.php')">
                            <span>Borrar</span>
                        </a>
                    </li>
                    </ul>
                <li>
                    <a onclick="toggleSubMenu('submenu4')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Licencias</span>
                    </a>
                </li>
                <ul id="submenu4" class="submenu">
                    <li>
                        <a onclick="cargarContenido('C_Licencias.php')">
                            <span>Consulta</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('F_Licencias.php')">
                            <span>Insertar</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('U_Licencias.php')">
                            <span>Update</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('FD_Licencias.php')">
                            <span>Borrar</span>
                        </a>
                    </li>
                </ul>
                <li>
                    <a onclick="toggleSubMenu('submenu5')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Multas</span>
                    </a>
                </li>
                <ul id="submenu5" class="submenu">
                    <li>
                        <a onclick="cargarContenido('C_Multas.php')">
                            <span>Consulta</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('F_Multas.php')">
                            <span>Insertar</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('U_Multas.php')">
                            <span>Update</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('FD_Multas.php')">
                            <span>Borrar</span>
                        </a>
                    </li>
                </ul>
                <li>
                    <a onclick="toggleSubMenu('submenu6')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Oficiales</span>
                    </a>
                </li>
                <ul id="submenu6" class="submenu">
                    <li>
                        <a onclick="cargarContenido('C_Oficiales.php')">
                            <span>Consulta</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('F_Oficiales.php')">
                            <span>Insertar</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('U_Oficiales.php')">
                            <span>Update</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('FD_Oficiales.php')">
                            <span>Borrar</span>
                        </a>
                    </li>
                </ul>
                <li>
                    <a onclick="toggleSubMenu('submenu7')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Propietarios</span>
                    </a>
                </li>
                <ul id="submenu7" class="submenu">
                    <li>
                        <a onclick="cargarContenido('C_Propietarios.php')">
                            <span>Consulta</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('F_Propietarios.php')">
                            <span>Insertar</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('U_Propietarios.php')">
                            <span>Update</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('FD_Propietarios.php')">
                            <span>Borrar</span>
                        </a>
                    </li>
                </ul>
                <li>
                    <a onclick="toggleSubMenu('submenu8')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Tarjetas Circulacion</span>
                    </a>
                </li>
                <ul id="submenu8" class="submenu">
                    <li>
                        <a onclick="cargarContenido('C_Tarjetas_Circulacion.php')">
                            <span>Consulta</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('F_Tarjetas_Circulacion.php')">
                            <span>Insertar</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('U_Tarjetas_Circulacion.php')">
                            <span>Update</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('FD_Tarjetas_Circulacion.php')">
                            <span>Borrar</span>
                        </a>
                    </li>
                </ul>
                <li>
                    <a onclick="toggleSubMenu('submenu9')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Tenencias</span>
                    </a>
                </li>
                <ul id="submenu9" class="submenu">
                    <li>
                        <a onclick="cargarContenido('C_Tenencias.php')">
                            <span>Consulta</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('F_Tenencias.php')">
                            <span>Insertar</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('U_Tenencias.php')">
                            <span>Update</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('FD_Tenencias.php')">
                            <span>Borrar</span>
                        </a>
                    </li>
                </ul>
                <li>
                    <a onclick="toggleSubMenu('submenu10')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Vehiculos</span>
                    </a>
                </li>
                <ul id="submenu10" class="submenu">
                    <li>
                        <a onclick="cargarContenido('C_Vehiculos.php')">
                            <span>Consulta</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('F_Vehiculos.php')">
                            <span>Insertar</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('U_Vehiculos.php')">
                            <span>Update</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('FD_Vehiculos.php')">
                            <span>Borrar</span>
                        </a>
                    </li>
                </ul>
                <li>
                    <a onclick="toggleSubMenu('submenu11')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Verificaciones</span>
                    </a>
                </li>
                <ul id="submenu11" class="submenu">
                    <li>
                        <a onclick="cargarContenido('C_Verificaciones.php')">
                            <span>Consulta</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('F_Verificaciones.php')">
                            <span>Insertar</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('U_Verificaciones.php')">
                            <span>Update</span>
                        </a>
                    </li>
                    <li>
                        <a onclick="cargarContenido('FD_Verificaciones.php')">
                            <span>Borrar</span>
                        </a>
                    </li>
                </ul>
            </ul>
        </nav>

        <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Dark Mode</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo">
                            
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="usuario">
                <img src="Sidebar/Jhampier.jpg" alt="">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre"><?php echo $_SESSION['user']; ?></span>
                        <span class="email">Administrador</span>
                    </div>
                    <a onclick="toggleLogoutMenu()">
                        <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                    </a>
                    <ul id="logoutSubMenu" class="submenu">
                    <li>
                            <a onclick="cargarContenido('Register.php')">
                                <span>Crear usuario</span>
                            </a>
                        </li>
                        <li>
                            <a onclick="cerrarSesion()">
                                <span>Cerrar sesión</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <main>
        <iframe id="contenedor" src="" frameborder="0"></iframe>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="Sidebar/script.js"></script>
</body>
</html>
        <?php
        }else if ($_SESSION['tipo'] == 'U') {
            header('location: Menu_Usuario.php');
        }
    }else{
        header('location: Login.php');
    }
?>
