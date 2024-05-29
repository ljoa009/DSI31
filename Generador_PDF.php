<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="CSS/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Gestión de Documentos</title>
    </head>
<body>
    <div class="container">
        <h1>Sistema de Gestión de Documentos</h1>
        <form action="Controlador.php" method="POST">
            <label for="Folio">Folio:</label>
            <input type="text" id="Id" name="Id" required>
            <label for="documento">Seleccionar Documento:</label>
            <select id="documento" name="documento" required>
                <option value="Licencias">Licencia</option>
                <option value="Tarjetas_Circulacion">Tarjeta de Circulación</option>
                <option value="Verificaciones">Tarjeta de Verificación</option>
            </select>
           <button type="submit" class="button">Generar PDF</button>
        </form>
    </div>
</body>
</html>