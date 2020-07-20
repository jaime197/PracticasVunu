<!DOCTYPE html>
<html lang="es">

<?php
	require 'includes/dbh.php';
	session_start();
	if(isset($_SESSION['userID'])){
		require 'index.php';
	}
	else {
		require 'index2.php';
	}
?>

<head>
    <title></title>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
 <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    
<link href="https://fonts.googleapis.com/css2?family=Merriweather&family=PT+Sans&display=swap" rel="stylesheet">
    
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    
<script src="js/javascript.js"></script>
    
</head>

<body>
    <div id="menu2">
        <ul><li><i class="fas fa-bars" onclick="openMenu()"></i>
    <nav id="menu">
        <span id="close" onclick="closeMenu()"><i class="fas fa-times"></i></span>
        <ul>
            <li>
                <a href="#titulos" onclick="closeMenu()">
                    inicio
                </a>
            </li>
            <li>
                <a href="#" onclick="closeMenu()">
                    Blog
                </a>
            </li>
          
        </ul>
    </nav></li>
            <li><a href="#titulos2">Inicio</a></li>
             <li><a href="#galeria">Galeria</a></li>
             <li><a href="#texto">Articulos</a></li>
            <li><a href="#contacto">suscripción</a></li>
     
            
        </ul>
    </div> 
    
    
    
    

    
    <div id="titulos2">  <h1>Peligro de los polos</h1>
        <h2>Calentamiento global  <a  href=#footer onclick="closeMenu()">  registrate </a>
                   </h2>
        
        <h1>El amazonas</h1>
            <h2>Lorem ipsum<a  href=#footer onclick="closeMenu()">  registrate </a></h2>
        
        <h1>Fotografias del mes</h1>
            <h2>Lorem ipsum<a  href=#footer onclick="closeMenu()">  registrate </a></h2>
    </div>
    
    
    <header><div id="titulos">
      
    
    
           
    </div></header>
  
    <section id="galeria" >
        
       

       
        <div>
            <div>
                <figure>
                    <img src="img/girafa.jpg" alt="">
                    <figcaption>
                        <h2>Girafa</h2>
                        <p>lorem</p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="img/peces.jpg" alt="">
                    <figcaption>
                        <h2>Oceano</h2>
                        <p>lorem</p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="img/tortuga.jpg"alt="">
                    <figcaption>
                        <h2>Tortuga</h2>
                        <p>lorem</p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="img/mono.jpg" alt="">
                    <figcaption>
                        <h2>Mono</h2>
                        <p>lorem ipsum</p>
                    </figcaption>
         
     
                </figure>
            </div>
        </div>
    </section>
          
  
        <main>
        <div id="texto">
         <h2>Las focas del artico</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultricies nunc, lobortis ligula semper integer massa dis nec. Sociosqu dictum per mus maecenas sodales velit id primis.habitlLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p></div>
            <div id="introduccion"></div>
        
        
      
           
    </main>
    <section>
           <div id="parallax2" class="parallax">
         <div id="texto2">
         <h2>Los monos del amazonas</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ultricies nunc, lobortis ligula semper integer massa dis nec. Sociosqu dictum per mus maecenas sodales velit id primis, cras fusce malesuada habit Lorem ipsum dolor sit amet consectetur adipiscing elit ultricies nunc.</p></div>
          
        </div>
    </section>
    
    
    

        <section id="contacto">
	

	  

		
	<div id="caja-formulario">
			
			<h1 class="titulares" id="formulario-titular">CONTACTO</h1>
			
	<form action="registrar.php" method="post" name="form1" id="formulario">
		    	  
	      <br>
		  <br>
		    
		<label for="textfield"></label>  
		<input name="usuario" type="text" required="required" class="estilos-input" id="nombre" placeholder="Usuario">
			 
		  <br>
		  <br>
 
		<label for="email"></label>
		<input name="email" type="email" required="required" class="estilos-input" id="email" placeholder="E-mail">
			  
		  <br>
		  <br>

		<label for="email"></label>
		<input name="contrasena" type="password" required="required" class="estilos-input" id="email" placeholder="Contraseña">
			 
 		<br>
		<br>

			  
		<div id="submit">

	    	<input type="submit" name="boton-enviar" id="boton-enviar" value="suscribirse">
            
           
				
	    </div>
							 			  
      </form>
		
	  </div>
      
      </section>

         
          
    
        
</body>
    
    
  <footer>
        <div  id="footer"class="footer">
             <div id="inicio">
            <p id="iniciar">Haz click aqui <a href=numeros.html>iniciar sesión</a> si ya estas suscrito</p></div>
  <p></p>
</div>
                   

    
        </footer>
</html>