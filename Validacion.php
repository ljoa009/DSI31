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
                        
                        header('location: Menu_Usuario.html');
                    }else{

                        header('location: Menu_Admin.html');
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