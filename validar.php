<?php
    session_start();
    $email = $_POST['email'];
    $psw = $_POST['psw'];                    
    require("bd.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_pass);
    //validar la conexión.
    if(mysqli_connect_errno()){
        echo "Error al conectar.";
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion, "utf8");

//se selecciona todo lo que coincida con el mail y la clave
    $consulta = "SELECT * FROM usuario WHERE CORREO = '$email' AND CLAVE = '$psw'";                                
//el resultado de la consulta se le pasa a la variable resultado    
    $resultado = mysqli_query($conexion, $consulta);

    
    
//se apunta al dato que esta en la array y se le pasa a fila
    $fila =mysqli_fetch_array($resultado);

    
    
//se comprueba si es un rol admin o no
        if($fila['ID_ROL'] == 1){
            $_SESSION['email'] = $email;
            header ("Location: vistaAdmin.php");
        }  elseif($fila['ID_ROL'] == 2){
            $_SESSION['email'] = $email;
            header ("Location: vistaEditor.php");
        }elseif($fila['ID_ROL'] == 3){
            $_SESSION['email'] = $email;
            header ("Location: vistaUsuario.php");
        }else{
            header ("Location: index.php");
        }        
        
?>