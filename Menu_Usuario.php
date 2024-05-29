<?php
    if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Usuario</title>
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
    </style>
</head>
<body>
    <h1>Menú Usuario</h1>
    <nav id="navbar">
        <ul>
            <li><a href="C_Centros_Verificacion.php">Centros de Verificación</a></li>
            <li><a href="C_Conductores.php">Conductores</a></li>
            <li><a href="C_Direcciones.php">Direcciones</a></li>
            <li><a href="C_Licencias.php">Licencias</a></li>
            <li><a href="C_Multas.php">Multas</a></li>
            <li><a href="C_Oficiales.php">Oficiales</a></li>
            <li><a href="C_Propietarios.php">Propietarios</a></li>
            <li><a href="C_Tarjetas_Circulacion.php">Tarjetas de Circulación</a></li>
            <li><a href="C_Tenencias.php">Tenencias</a></li>
            <li><a href="C_Vehiculos.php">Vehículos</a></li>
            <li><a href="C_Verificaciones.php">Verificaciones</a></li>
        </ul>
    </nav>
</body>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>