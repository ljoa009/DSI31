<?php
    $User_Name=$_POST['User_Name'];
    $Password=$_POST['Password'];

    include ("Controlador.php");
    $Con = Conectar();
    $SQL = "SELECT * FROM CUENTAS WHERE User_Name = '$User_Name';";
    $ResultSet = Ejecutar($Con, $SQL);

    if ($Fila['5'] > 3) {
      $SQL = "UPDATE cuentas SET Bloqueo='1' WHERE User_Name = '$User_Name';";
      Ejecutar($Con, $SQL);
    }
    
    //Validar si el Usuario Existe
    $Existe = mysqli_num_rows($ResultSet);
    if($Existe == 1){
        $Fila = mysqli_fetch_row($ResultSet);
        if($Password == $Fila[1]){
            if (isset($_FILES['hashfile']) && !empty($_FILES['hashfile']['tmp_name'])) {
                $file_tmp_path = $_FILES['hashfile']['tmp_name'];
                $hash = file_get_contents($file_tmp_path);
                if(trim($hash) == $Fila[6]){
                    if($Fila[3] == 1){
                        if($Fila[4] == 0){
                            if($Fila[2] == 'U'){
                                session_start();
                                $_SESSION['user'] = $User_Name;
                                $_SESSION['tipo'] = $Fila[2];
                                header('location: Menu_Usuario.php');
                            }else if($Fila[2] == 'A'){
                                session_start();
                                $_SESSION['user'] = $User_Name;
                                $_SESSION['tipo'] = $Fila[2];
                                header('location: Menu_Admin.php');
                            }
                        }else{
                            echo "<script type='text/javascript'>alert('Cuenta Bloqueada');</script>";
                        }
                    }else{
                        echo "<script type='text/javascript'>alert('Cuenta Inactiva');</script>";
                    }
                }else{
                  $SQL = "UPDATE cuentas SET Intentos='".($Fila['5'] + 1)."' WHERE User_Name = '$User_Name';";
                  Ejecutar($Con, $SQL);
                  echo "<script type='text/javascript'>alert('Tus datos de inicio son incorrectos');</script>";
                }
            }else{
                echo "<script type='text/javascript'>alert('Error al subir el archivo');</script>";
                
            }
        }else{
            $SQL = "UPDATE cuentas SET Intentos='".($Fila['5'] + 1)."' WHERE User_Name = '$User_Name';";
            Ejecutar($Con, $SQL);
            echo "<script type='text/javascript'>alert('Tus datos de inicio son incorrectos');</script>";
        }
    }else{
        echo "<script type='text/javascript'>alert('Tus datos de inicio son incorrectos');</script>";
    }
    echo "
        <script type='text/javascript'>
            setTimeout(function() {
                window.location.href = 'Login.php';
            }, 5);
        </script>
        ";
?>