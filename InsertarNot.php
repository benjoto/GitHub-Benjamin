
<html>
	<head>		
	</head>
	<body>
		<?php
                       

            
            $not = $_POST["noticia"];

            

            require("bd.php");
            $conexion = mysqli_connect($db_host, $db_usuario, $db_pass);

            //validacion de conexion
            if(mysqli_connect_errno()){
                echo "error en conexion";
                exit();
            }                        

            mysqli_select_db($conexion, $db_nombre) or die ("no se ecuentra una bd");
            mysqli_set_charset($conexion, "utf8");

            $consulta = "INSERT INTO noticia (noticia) VALUES (?)";
            $resultado = mysqli_prepare($conexion, $consulta);
            
            $ok=mysqli_stmt_bind_param($resultado,"s", $not);
            $resultado = mysqli_stmt_execute($resultado);


            //insertar registro

            if (!$resultado){
                echo "error al ingresar";
            }else{
                header("Location: vistaEditor.php");
            }


		?>
	</body>
</html>