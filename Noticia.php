<html>
	<head>		
        <meta charset="UTF-8">
        <title>Trabajo Pagina Venta Juegos</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/font-awesome.css">
	</head>
	<body>
        
<!--navbar inicio-->
        <ul class="navbar">
            <li class="itemNavbar"><a href="index.php">Home</a></li>           
            <li class="itemNavbar"><a href="registro.php">Crear Cuenta</a></li>      
            <li class="itemNavbar"><a href="nosotros.php">Quienes Somos</a></li>  
            <li class="itemNavbar"><a href="Noticia.php">Noticias</a></li>
            <li class="itemNavbar"><a href="Reseña.php">reseña</a></li>
            <li class="itemNavbar"><a href="cerrarSesion.php">cerrar sesion</a></li>            
        </ul>
<!--navbar inicio-->
<!--slider inicio-->
            
<!--slider fin-->    
        <?php
                    echo "<h1 style='color:white;'>Noticias</h1>";    
                // <!--copiar estructura para poder editar la noticia-->
                    require("bd.php");
                    $conexion = mysqli_connect($db_host, $db_usuario, $db_pass);
                    //validar la conexión.
                    if(mysqli_connect_errno()){
                        echo "Error al conectar.";
                        exit();
                    }

                    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la base de datos");
                    mysqli_set_charset($conexion, "utf8");  
        //termino de la estructura a copiar
                    $consulta = "SELECT * FROM noticia";
                    $resultado = mysqli_query($conexion, $consulta);
                ?>    
                <div class="container">
                    <div class="col-lg-7 col-lg-offset-3">
                        <?php
                            while($fila = mysqli_fetch_array($resultado)){   
                        ?>
                        <p style="color:white;"> <?php echo $fila['NOTICIA']."<hr>"?></p>

                        <?php
                            }
                        ?>
                    
                    </div>

                </div>       
            


                
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>        