<?php
  session_start();
  if (isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="CSS/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador PDF</title>
</head>
<body>
    <h1>Generador de PDF</h1>
    <form method="post" action="Generador_Documentos.php">
        <label>Documento: </label>
        <select id="Documento" name="Documento">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="Tarjeta de Circulacion">Tarjeta de Circulacion</option>
            <option value="Licencia">Licencia</option>
            <option value="Tenencia">Tenencia</option>
            <option value="Multa">Multa</option>
        </select>
        <br>
        <label>Id del Documento: </label>
        <input type="number" id="IdDocumento" name="IdDocumento">
        <br>
        <input type="submit" value="Generar PDF">
    </form>
</body>
</html>
<?php
  } else {
    header('Location: Login.php');
  }
?>
