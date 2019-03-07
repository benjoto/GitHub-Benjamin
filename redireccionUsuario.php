
<html>
	<head>		
	</head>
	<body>
        <?php 
            
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


                $consulta = "SELECT * FROM usuario WHERE CORREO = '$email' AND CLAVE = '$psw'";                                
                $resultado = mysqli_query($conexion, $consulta);
                
                $fila = $resultado;

            
                if($resultado!= 0){
                    header ("Location: vistaAdmin.php");
                }

        ?>
	</body>
</html>