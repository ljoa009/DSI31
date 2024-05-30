<?php
    session_start();
    if(isset($_SESSION['user'])){
        include("controlador.php");

        $usuario = $_POST['User_Name'];
        $password = $_POST['Password'];
        $tipo = $_POST['Tipo'];

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $Con = Conectar();
        $SQL = "INSERT INTO cuentas (User_Name, Password, Tipo, Status, Bloqueo, Intentos, keyhash) VALUES ('$usuario', '$password', '$tipo', 1, 0, 0, '$hash')";
        $Resultset = Ejecutar($Con, $SQL);

        if ($Resultset) {
            $filename = "hash_$usuario.cer";
            file_put_contents($filename, $hash);
            
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($filename).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filename));
            flush();
            readfile($filename);
            
            unlink($filename);

            exit(); 
        } else {
            echo "Error en el registro: " . mysqli_error($Con);
        }
        
        Desconectar($Con);
    }else{
        header('location: Login.php');
    }
?>
