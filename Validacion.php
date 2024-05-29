<?php
    $User_Name=$_POST['User_Name'];
    $Password=$_POST['Password'];

    include ("Controlador.php");
    $Con = Conectar();
    $SQL = "SELECT * FROM CUENTAS WHERE User_Name = '$User_Name';";
    $ResultSet = Ejecutar($Con, $SQL);

    //Validar si el Usuario Existe
    $Existe = mysqli_num_rows($ResultSet);
    if($Existe == 1){
        $Fila = mysqli_fetch_row($ResultSet);
        if($Password == $Fila[1]){
            if($Fila[3] == 1){
                if($Fila[4] == 0){
                    if($Fila[2] == 'U'){
                        session_start();
                        $_SESSION['user'] = $User_Name;
                        $_SESSION['tipo'] = $Fila[2];
                        header('location: Menu_Usuario.php');
                    }else{
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
            echo "<script type='text/javascript'>alert('Tus datos de inicio son incorrectos');</script>";
        }
    }else{
        echo "<script type='text/javascript'>alert('Tus datos de inicio son incorrectos');</script>";
    }
    echo "
        <script type='text/javascript'>
            setTimeout(function() {
                window.location.href = 'Login.html';
            }, 5);
        </script>
        ";
?>