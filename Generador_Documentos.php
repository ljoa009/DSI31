<?php
session_start();
if (isset($_SESSION['user'])) {
    if (isset($_POST['Documento']) && isset($_POST['IdDocumento'])) {
        $documento = $_POST['Documento'];
        $idDocumento = $_POST['IdDocumento'];

        switch ($documento) {
            case 'Multa':
                header("Location: Generador_Multas.php?id=$idDocumento");
                break;
            case 'Licencia':
                header("Location: Generador_PDF_Licencia.php?id=$idDocumento");
                break;
            case 'Tarjeta de Circulacion':
                header("Location: Generador_TC.php?id=$idDocumento");
                break;
            // Agregar casos para otros documentos si es necesario
            default:
                echo "Tipo de documento no válido.";
        }
    } else {
        echo "Faltan datos.";
    }
} else {
    header('Location: Login.php');
}
?>
