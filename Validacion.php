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
        print ("El Usuario Existe");
        $Fila = mysqli_fetch_row($ResultSet);
        if($Password == $Fila[1]){
            print ("Contraseña Correcta");
            if($Fila[3] == 1){
                print("Cuenta Activa");
                if($Fila[4] == 0){
                    print("Cuenta No Bloqueada");

                    print("Entrar");
                    if($Fila[2] == U){
                        print("Entrar como Usuario");
                    }else{
                        print("Entrar como Administrador");
                    }
                }else{
                    print("Cuenta Bloqueada");
                }
            }else{
                print("Cuenta Inactiva");
            }
        }else{
            print ("Contraseña Incorrecta");
        }
    }else{
        print ("El Usuario NO Existe");
    }
?>