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
			<li>
				<img src="img/1.jpg" alt="">
				<section class="caption">
					<h1>Sony</h1>
					<p>Juegos exclusivos de la compañia.</p>
				</section>
			</li>
			<li>
				<img src="img/2.jpg" alt="">
				<section class="caption">
					<h1>Nintendo</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quis ipsa, id quidem quisquam unde.</p>
				</section>
			</li>
			<li>
				<img src="img/3.jpg" alt="">
				<section class="caption">
					<h1>PC Gaming</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quis ipsa, id quidem quisquam unde.</p>
				</section>
			</li>
			<li>
				<img src="img/4.jpg" alt="">
				<section class="caption">
					<h1>Reporte de errores</h1>
					<p>En esta zona se comentan los glitches ocurridos en diversos juegos (especialmente de Bugisoft)</p>
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
   <!-- fin del slider-->
        <form action="buscarReseña.php" method="post">
            <h1 style="color:white">buscar reseña</h1>
            <input type="text"name="buscar">
            <input type="submit" value="buscar">
            
        </form>
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/main.js"></script>
            
</body>
</html>