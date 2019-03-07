
<html>
	<head>		
	</head>
	<body>
		<?php
            //obtener datos del formulario            
            $nom = $_POST["nombre"];
            $ape = $_POST["apellido"];
            $email = $_POST["email"];
            $psw = $_POST["psw"];
            $rol = $_POST["rol"];

            require("bd.php");
            $conexion = mysqli_connect($db_host, $db_usuario, $db_pass);

            //validacion de conexion
            if(mysqli_connect_errno()){
                echo "error en conexion";
                exit();
            }

            mysqli_select_db($conexion, $db_nombre) or die ("no se ecuentra una bd");
            mysqli_set_charset($conexion, "utf8");
            $consulta = "INSERT INTO usuario (nom_usu, ape_usu, correo, clave, id_rol) VALUES (?, ?, ?, ?,?)";            
            $resultado = mysqli_prepare($conexion, $consulta);

            //asignar parametros
            $ok=mysqli_stmt_bind_param($resultado,"sssss", $nom, $ape, $email, $psw, $rol);
            $ok=mysqli_stmt_execute($resultado);

            //insertar registro

            if (!$resultado){
                echo "error al ingresar";
            }else{
                header("Location: index.php");
            }


		?>
	</body>
</html>