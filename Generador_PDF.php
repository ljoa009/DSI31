<?php
    session_start();
    if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="CSS/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Gestión de Documentos</title>
        <script>
            function mostrarMotivoMulta() {
                var documento = document.getElementById("documento").value;
                var motivoMulta = document.getElementById("motivoMulta");

                if (documento === "Multas") {
                    motivoMulta.style.display = "block";
                } else {
                    motivoMulta.style.display = "none";
                }
            }
        </script>
    </head>
<body>
    <div class="container">
        <h1>Sistema de Gestión de Documentos</h1>
        <form action="Controlador.php" method="POST">
            <label for="Folio">Folio:</label>
            <input type="text" id="Id" name="Id" required>
            
            <label for="documento">Seleccionar Documento:</label>
            <select id="documento" name="documento" required onchange="mostrarMotivoMulta()">
                <option value="Licencias">Licencia</option>
                <option value="Tarjetas_Circulacion">Tarjeta de Circulación</option>
                <option value="Verificaciones">Tarjeta de Verificación</option>
                <option value="Multas">Multas</option>
            </select>
            
            <div id="motivoMulta" style="display:none;">
                <label for="motivo">Motivo de la Multa:</label>
                <select id="motivo" name="motivo">
                    <option value="Exceso_Velocidad">Exceso de Velocidad</option>
                    <option value="Estacionamiento_Prohibido">Estacionamiento Prohibido</option>
                    <option value="Documentacion_Incompleta">Documentación Incompleta</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <button type="submit" class="button">Generar PDF</button>
        </form>
    </div>
</body>
</html>
<?php
    }else{
        header('location: Login.php');
    }
?>
