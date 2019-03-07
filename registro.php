<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Trabajo Pagina Venta Juegos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.css">

	
</head>
<body>
    <!--navbar-->
    <ul class="navbar">
      <li class="itemNavbar"><a href="index.php">Home</a></li>           
      <li class="itemNavbar"><a href="registro.php">Crear Cuenta</a></li>      
      <li class="itemNavbar"><a href="nosotros.php">Quienes Somos</a></li>
      <li class="itemNavbar"><a href="Noticia.php">Noticias</a></li>
      <li class="itemNavbar"><a href="Reseña.php">reseña</a></li>
      <li class="itemNavbar"><a href="cerrarSesion.php">cerrar sesion</a></li>  
    </ul>
<!--slider-->
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
    
    <br /><br />
    <!--inicio de formulario de registro-->
    <div class="container">
        <div class="col-lg-9 col-lg-offset-3">
            <form action="insertarUsu.php" class="formReg-container" method="post">
                <h1>Crear Cuenta</h1>                
                <input type="text" placeholder="Nombre" name="nombre" required>                
                <input type="text" placeholder="Apellido" name="apellido" required>
                <input type="mail" placeholder="Email" name="email" required>                
                <input type="password" placeholder="Clave" name="psw" required>    
                <input type="hidden" name="rol" value="3">
                <button type="submit" class="btn">Registrar</button>        
            </form>    
        </div>
    </div>
    <!--fin de formulario de registro-->
    
   <!--inicio de sesion-->
   <button class="open-button" onclick="openForm()">Inicio de sesion</button>       
        <div class="form-popup" id="myForm">
          <form action="redireccionUsuario.php" class="form-container" method="post">
            <h1>Login</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Ingresar Email" name="email" required style="color:black">

            <label for="psw"><b>Clave</b></label>
            <input type="password" placeholder="Ingresar Clave" name="psw" required style="color:black">            

            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>
        <!-- fin del inicio de sesion-->
        <script src="js/jquery-3.1.0.min.js"></script>
	    <script src="js/main.js"></script>
    
</body>
</html>