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
        <?php
            session_start();             

            if(isset($_SESSION['email'])){
                //echo "hola Benji admin";
            }else{
                header("Location: index.php");
            }
        ?>
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
        <div class="slideshow">
                <ul class="slider">
                    <li class="liSlider">
                        <img src="img/1.jpg" alt="">
                        <section class="caption">
                            <h1>Sony</h1>
                            <p>Juegos exclusivos de la compañia.</p>
                        </section>
                    </li>
                    <li class="liSlider">
                        <img src="img/2.jpg" alt="">
                        <section class="caption">
                            <h1>Nintendo</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quis ipsa, id quidem quisquam unde.</p>
                        </section>
                    </li>
                    <li class="liSlider">
                        <img src="img/3.jpg" alt="">
                        <section class="caption">
                            <h1>PC Gaming</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quis ipsa, id quidem quisquam unde.</p>
                        </section>
                    </li >
                    <li class="liSlider">
                        <img src="img/4.jpg" alt="">
                        <section class="caption">
                            <h1>X-box</h1>
                            <p>Juegos para esta plataforma</p>
                        </section>
                    </li>
                </ul> 
            
                <div class="izq">
                    <span class="fa fa-chevron-left"></span>
                </div>

                <div class="der">
                    <span class="fa fa-chevron-right"></span>
                </div>
        </div>               
<!--slider fin-->       


            

        <?php
                echo "<h1 style='color:white;'>EDITOR</h1>";                        
                require("bd.php");
                $conexion = mysqli_connect($db_host, $db_usuario, $db_pass);
                //validar la conexión.
                if(mysqli_connect_errno()){
                    echo "Error al conectar.";
                        exit();
                    }

                mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la base de datos");
                mysqli_set_charset($conexion, "utf8");                                                                                
            ?>    
            <h1>Crear una noticia</h1>
            <div class="container">
                <div class="col-lg-8 col-lg-offset-3">
                <form  action="insertarNot.php" method="post" class="formReg-container">
                    <textarea name="noticia" style="resize:none; height:400px; background-color:black;color:white;" class="col-lg-12" ></textarea>
                    <br />                    
                    <input type="submit" value="enviar" class="btn">
                </form>
                </div>
            </div>
            <h1>Crear una reseña</h1>
               <div class="container">
                <div class="col-lg-8 col-lg-offset-3">
                <form  action="insertarRes.php" method="post" class="formReg-container">
                    <textarea name="reseña" style="resize:none; height:400px; background-color:black;color:white;" class="col-lg-12"></textarea>  

                    <br />  

                    <select name="idJuego">    
                            <option selected>seleccionar juego</option>                                      
                            <?php 
                                $consulta = "SELECT * FROM juego";
                                $resultado = mysqli_query($conexion, $consulta);
                                //$fila = mysqli_fetch_array
                                if($resultado!=null){
                                    while($fila = mysqli_fetch_array($resultado)){ 
                                 ?>             
                                <option value="<?php echo $fila['ID_JUEGO']?>"><?php echo $fila['NOM_JUEGO']?></option>  
                                <?php
                                    }   
                                }
                                else
                                    {
                                        echo "<p>el juego no existe</p>";
                                    }                                
                                ?>                                                              
                            </select>  

                    <input type="submit" value="enviar" class="btn">
                </form>
                </div>
            </div>


            <h1>Agregar Juegos</h1> 
            <div class="container">
                <div class="col-lg-9 col-lg-offset-3">
                    <form action="insertarJuego.php" class="formReg-container" method="post">
                            <h3 style="color:white">Nombre del Juego</h3>
                            <input type="text" name="nomJuego">
                            <h3 style="color:white">Plataforma</h3>
                            <input type="text" name="plataformaJuego">
                            <h3 style="color:white">Genero</h3>
                            <input type="text" name="generoJuego">    
                            
                            
                            

                            <input type="submit" name="enviar" value="enviar" class="btn">
                    </form>
                    <br />
                    <br />
                    <br />
                </div>
            </div>

            

            
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>        