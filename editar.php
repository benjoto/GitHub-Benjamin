<?php
			
            $id = $_POST["editar"];
            $rol = $_POST["rol"];
			require("bd.php");
			$conexion = mysqli_connect($db_host, $db_usuario, $db_pass);
			
			//validar la conexión.
			if(mysqli_connect_errno()){
				echo "Error al conectar.";
				exit();
			}
			
			mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la base de datos");
			mysqli_set_charset($conexion, "utf8");
            

            //sentencias preparadas
            $consulta = "UPDATE usuario SET ID_ROL = ? WHERE ID_USU=?";            
            $resultado = mysqli_prepare($conexion, $consulta);

            $ok=mysqli_stmt_bind_param($resultado,"ss", $rol,$id);
            $resultado = mysqli_stmt_execute($resultado);
			
			if (!$resultado){
                echo "error al ingresar";
            }else{
                header("Location: vistaAdmin.php");
            }
			
			
		?>