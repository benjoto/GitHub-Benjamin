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
                    echo "<h1 style='color:white;'>ADMIN</h1>";    
                    //copiar desde aca
                    require("bd.php");
                    $conexion = mysqli_connect($db_host, $db_usuario, $db_pass);
                    //validar la conexión.
                    if(mysqli_connect_errno()){
                        echo "Error al conectar.";
                        exit();
                    }

                    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la base de datos");
                    mysqli_set_charset($conexion, "utf8");  
                    //hasta aca                                                                              
                ?>    
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                        <table style="color:white;">
                        <tr>
                            <td><p>ID</p></td>
                            <!--<td><p>ROL</p></td>-->
                            <td><p>NOMBRE</p></td>
                            <td><p>APELLIDO</p></td>   
                            <td><p>CORREO</p></td>                         
                        </tr>
                        <?php

                            $consulta = "SELECT * FROM usuario";
                            $resultado = mysqli_query($conexion, $consulta);
                            //$fila = mysqli_fetch_array
                            while($fila = mysqli_fetch_array($resultado)){   
                                if ($fila['ID_USU'] != 1 ){
                        ?>
                        <tr>
                            <td><?php echo $fila['ID_USU']?></td>                                                                     
                            <!--<td><?php //echo $fila['ID_ROL']?></td>-->
                            <td><?php echo $fila['NOM_USU']?></td>
                            <td><?php echo $fila['APE_USU']?></td>
                            <td><?php echo $fila['CORREO']?></td>
                        </tr>
                        
                        <?php
                                }
                            }
                        ?>
                        </table> 
                    
                    </div>   
                </div> 
                
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <form action="borrar.php" method="post">
                        <h3 style="color:white;">BORRAR USUARIO</h3>
                        <input type="text" name="delete" placeholder="ID DEL USUARIO">    
                        <input type="submit" value="enviar">                
                    </form>
                </div>
            </div>      

            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <form action="editar.php" method="post">
                        <h3 style="color:white;">EDITAR USUARIO</h3>
                        <input type="text" name="editar" placeholder="ID DEL USUARIO">  
                        <br />  
                        <select name="rol">                            
                            <option value="2">editor</option>
                            <option value="3" selected>usuario</option>                            
                        </select>
                        <br />  
                        <input type="submit" value="enviar">                
                    </form>                    
                </div>
            </div>                  
            <br />  <br />  <br />                      


        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>        