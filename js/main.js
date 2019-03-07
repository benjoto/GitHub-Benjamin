$(document).ready(function(){
	
	var imgItems = $('.slider li').length; //Determinar nro de slides
	var imgPos = 1;
	var tiempo = 5000;
	
	//Agregar paginacion.
	for(var i = 1; i<= imgItems; i++){
		$('.paginacion').append('<li class="fa fa-circle"></li>');
	}
	//------------------------------------
	$('.slider li').hide();//Ocultar slides.
	$('.slider li:first').show();//Mostrar primer slider.
	$('.paginacion li:first').css({'color':'red'});//Primer item de páginacion con color
	
	//Ejecutar funciones
	$('.paginacion li').click(paginacion);
	$('.der span').click(nextSlider);
	$('.izq span').click(prevSlider);

	//Ejecuta la funcion nextSlider con un intervalo de tiempo segun la variable tiempo.
	setInterval(function(){
		nextSlider();
	},tiempo);
	
	//------------
	
	//Funciones
	function paginacion(){
		pagPos = $(this).index()+1;//Posicion de la paginación seleccionada.
		$('.slider li').hide();
		$('.slider li:nth-child('+pagPos+')').fadeIn();//Mostramos slide en posicion seleccionada.
		$('.paginacion li').css({'color':'gray'});//Color a los elementos de paginación
		$(this).css({'color':'red'});//Color a la paginación seleccionada.
		
		imgPos = pagPos;
	}
	
	function nextSlider(){
		//Verifica que no supere el tamaño del arreglo con las imagenes.
		if(imgPos >= imgItems){
		   imgPos = 1;
		   }else{
		   imgPos++;
		   }
		
		//Asignar colores a elementos de paginación
		$('.paginacion li').css({'color':'gray'});
		$('.paginacion li:nth-child('+imgPos+')').css({'color':'red'});
		
		$('.slider li').hide();
		$('.slider li:nth-child('+imgPos+')').fadeIn();//Mostramos slide en posicion sleccionada.
	}
	
	function prevSlider(){
		
		//Verifica que no pueda llegar a 0 o menos.
		if(imgPos <= 1){
		   imgPos = imgItems;
		   }else{
		   imgPos--;
		   }
		
		//Asignar colores a elementos de paginación
		$('.paginacion li').css({'color':'gray'});
		$('.paginacion li:nth-child('+imgPos+')').css({'color':'red'});
		
		$('.slider li').hide();
		$('.slider li:nth-child('+imgPos+')').fadeIn();//Mostramos slide en posicion sleccionada.
		
	}
    
        
	
});

