<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de Base de Datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            padding: 10px 10px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        li {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
            position: relative;
        }
        li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        li a:hover {
            background-color: #555;
        }
        .sub-menu {
            display: none;
            position: absolute;
            background-color: #333;
            padding: 10px;
            border-radius: 5px;
            top: 100%;
            left: 0;
            width: 200px;
            z-index: 1;
        }
        li:hover .sub-menu {
            display: block;
        }
        .sub-menu li {
            display: block;
            margin-bottom: 5px;
        }
        .sub-menu a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 5px 0;
        }
        .sub-menu a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Menú Administrador</h1>
    <nav id="navbar">
        <ul>
            <li>
                <a href="">Centros de Verificación</a>
                <ul class="sub-menu">
                    <li><a href="F_Centros_Verificacion.php">Insertar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="C_Centros_Verificacion.php">Consultar Datos</a></li>
                    <li><a href="FD_Centros_Verificacion.php">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <a href="">Conductores</a>
                <ul class="sub-menu">
                    <li><a href="F_Conductores.php">Insertar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="C_Conductores.php">Consultar Datos</a></li>
                    <li><a href="FD_Conductores.php">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <a href="">Direcciones</a>
                <ul class="sub-menu">
                    <li><a href="F_Direcciones.php">Insertar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="C_Direcciones.php">Consultar Datos</a></li>
                    <li><a href="FD_Direcciones.php">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <a href="">Licencias</a>
                <ul class="sub-menu">
                    <li><a href="F_Licencias.php">Insertar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="C_Licencias.php">Consultar Datos</a></li>
                    <li><a href="FD_Licencias.php">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <a href="">Multas</a>
                <ul class="sub-menu">
                    <li><a href="F_Multas.php">Insertar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="C_Multas.php">Consultar Datos</a></li>
                    <li><a href="FD_Multas.php">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <a href="">Oficiales</a>
                <ul class="sub-menu">
                    <li><a href="F_Oficiales.php">Insertar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="C_Oficiales.php">Consultar Datos</a></li>
                    <li><a href="FD_Oficiales.php">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <a href="">Propietarios</a>
                <ul class="sub-menu">
                    <li><a href="F_Propietarios.php">Insertar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="C_Propietarios.php">Consultar Datos</a></li>
                    <li><a href="FD_Propietario.php">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <a href="">Tarjetas de Circulación</a>
                <ul class="sub-menu">
                    <li><a href="F_Tarjetas_Circulacion.php">Insertar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="C_Tarjetas_Circulacion.php">Consultar Datos</a></li>
                    <li><a href="FD_Tarjetas_Circulacion.php">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <a href="">Tenencias</a>
                <ul class="sub-menu">
                    <li><a href="F_Tenencias.php">Insertar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="C_Tenencias.php">Consultar Datos</a></li>
                    <li><a href="FD_Tenencias.php">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <a href="">Vehículos</a>
                <ul class="sub-menu">
                    <li><a href="F_Vehiculos.php">Insertar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="C_Vehiculos.php">Consultar Datos</a></li>
                    <li><a href="FD_Vehiculos.php">Eliminar</a></li>
                </ul>
            </li>
            <li>
                <a href="">Verificaciones</a>
                <ul class="sub-menu">
                    <li><a href="F_Verificaciones.php">Insertar</a></li>
                    <li><a href="#">Actualizar</a></li>
                    <li><a href="C_Verificaciones.php">Consultar Datos</a></li>
                    <li><a href="FD_Verificaciones.php">Eliminar</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</body>
</html>
