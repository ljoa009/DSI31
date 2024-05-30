<?php
    session_start();
    if(isset($_SESSION['user'])) {
        if ($_SESSION['tipo'] == 'U') {
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
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a onclick="cargarContenido('C_Centros_Verificacion.php')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Centros Verificacion</span>
                    </a>
                </li>
                <li>
                    <a onclick="cargarContenido('C_Conductores.php')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Conductores</span>
                    </a>
                </li>
                <li>
                    <a onclick="cargarContenido('C_Direcciones.php')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Direcciones</span>
                    </a>
                </li>
                <li>
                <a onclick="cargarContenido('C_Licencias.php')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Licencias</span>
                    </a>
                </li>
                <li>
                    <a onclick="cargarContenido('C_Multas.php')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Multas</span>
                    </a>
                </li>
                <li>
                    <a onclick="cargarContenido('C_Oficiales.php')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Oficiales</span>
                    </a>
                </li>
                <li>
                    <a onclick="cargarContenido('C_Propietarios.php')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Propietarios</span>
                    </a>
                </li>
                <li>
                    <a onclick="cargarContenido('C_Tarjetas_Circulacion.php')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Tarjetas Circulacion</span>
                    </a>
                </li>
                <li>
                    <a onclick="cargarContenido('C_Tenencias.php')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Tenencias</span>
                    </a>
                </li>
                <li>
                    <a onclick="cargarContenido('C_Vehiculos.php')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Vehiculos</span>
                    </a>
                </li>
                <li>
                    <a onclick="cargarContenido('C_Verificaciones.php')">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Verificaciones</span>
                    </a>
                </li>
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
                        <span class="email">Usuario</span>
                    </div>
                    <a onclick="toggleLogoutMenu()">
                        <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                    </a>
                    <ul id="logoutSubMenu" class="submenu">
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
        }else if ($_SESSION['tipo'] == 'A') {
            header('location: Menu_Admin.php');
        }
    }else{
        header('location: Login.php');
    }
?>
