<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="description" content="Pagina de Enseñanza HTML 5">
	<meta name="keywords" content="html5,css3,javascript,diseño web">
	<title>INICIO</title>
    
    <style>
	
	#subtitulos{width:138px;
    text-align:center;
	margin-left:5px;
    border:3px solid #F00;
    border-radius:15px 15px 15px 15px;
    box-shadow:#003 5px 5px 15px;
	background:-webkit-linear-gradient(top,#d2311e,#e24836,#e45847,#e76758,#e97769,#ec867b,#ee968c,#f1a69d,#f3b5ae,#d2311e,#e24836,#e45847);
	font:bold 1em Verdana, Geneva, sans-serif;
	text-shadow:#000 3px 3px 3px;
	
    }
	#NOT{margin-left:5px;
    border:3px solid #939;
    border-radius:3px 3px 3px 3px;}
	#imagen{
    -webkit-transition:-webkit-transform 1s ease 0.5s;
	margin-left:5px;
    border:3px solid #909;
    border-radius:3px 3px 3px 3px;}
	
	
	#imagen:hover{
    -webkit-transform:rotate(350deg);
    }
	
    </style>
    
	<link rel="stylesheet" type="text/css" href="noticias.css">
</head>
<body>
    <header id="cabecera">
	     <h1 align="center" style="color:white">BIODIVERSIDAD</h1>
	</header>
	
		
		
	
	<nav id="navegador">
	<center>   <p>FLORA Y FAUNA DEL ECUADOR</p></center>
	</nav>
	<nav id="nav">
  <ul> 
   <li><a href="index.php"><span>Inicio</span></a>
   </li>
   <li><a href="noticias22.html"><span>Historia</span></a>
   </li>
   <li><a href="PAGINA WEB 2/pagina web22.html"><span>Galeria Flores</span></a>
   </li>
   <li><a href="PAGINA WEB 2/pagina web222.html"><span>Galeria Fauna</span></a>
   </li>
   
 </ul>
</nav>
	<aside id="barra" align="center" style="color:white">
	     <blockquote>Redes Sociales</blockquote>
          <figure>
                 
                 <?php echo '<a href="https://www.facebook.com/cristian.vega.7731247">Facebook</a>';?>	
                     <?php echo '<a href="https://www.youtube.com/channel/UC0i1WlhqjWydxYcgFrO9NaQ">Youtube</a>';?>
                      <?php echo '<a href="https://vm.tiktok.com/K62Ud5/">Tiktock</a>';?>
          </figure>
          
           
          <blockquote>Propietario del sitio</blockquote>  
           <figure>
                <img src="36.jpg" width="200px" height="190px"/>
          </figure>
          <p style="color:black">CRISTIAN ALEXANDER VEGA REDIN</p>
           
          <blockquote>Visitas</blockquote> 
          <figure>
                <h3>CONTADOR DE VISITAS ➩
			<?php
			
			include('CONTADOR_VISITAS.php');echo $contador;

			?></h3>
          <iframe width="200" height="190" src="https://www.youtube.com/embed/hDG3ZU-lvII?start=9" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
          
	</aside>
	
		<section id="seccion">
		    <article>
                
                <header id="subtitulos">
					      <h3 align="center"  style="color:white">Geografia</h3>
				</header>
                
                <header>
					      <h2 id="NOT"><strong ></strong></h2>
<b><p> 
<img src="53.jpg"width="250px" height="200px"  align="right">Ecuador limita al norte con Colombia; al sur y al este, con Perú; y al oeste, con el océano Pacífico.

El territorio continental se encuentra entre cuatro puntos extremos:
En el norte: 01º28'54'' latitud norte y 78º50'10'' longitud occidental, que corresponde a la desembocadura del río Mataje, en el océano Pacífico.
En el sur: 05º00'00'' latitud sur y 79º01'10'' longitud occidental, que corresponde a la afluencia de la quebrada San Francisco, en el río Chinchipe.
En el este: 00º58'48'' de latitud sur y 75º10'00'' de longitud occidental, que corresponde a la confluencia de los ríos Napo y Aguarico.
En el oeste: 01º11'24'' de latitud sur y 81º08'36'' de longitud occidental, que corresponde al punto extremo oeste de la isla de La Plata.

Las islas Galápagos se encuentran en el océano Pacífico, a una distancia aproximada de 1000 km al oeste del territorio continental.

El archipiélago de Galápagos, conocido también como archipiélago de Colón, está conformado por cinco islas grandes; catorce, medianas; y más de un centenar de islotes.
</p>
				<h2 id="NOT"><strong ></strong></h2>
					<header id="subtitulos">
					      <h3 align="center"  style="color:white">Biodiversidad</h3>
				</header>
                
                <header>
					      <b><p>Se han identificado 3800 especies de animales vertebrados, 1550 especies de mamíferos, 375 especies de anfibios, 350 clases de reptiles y 1600 especies de aves, de las cuales el 15 % son endémicas.</p></b>
				</header>
                	<h2 id="NOT"><strong ></strong></h2>
                 <marquee SCROLLAMOUNT=25>
<table align="center" width="10">
<tr>
<td>  
				   <figure id="imagen"><div align="center">
				     <center> <p> <img src="51.gif" width="300px" height="150px" border="0"></h></p> </center>
					  <figcaption><div align="center"><address ><strong>Fauna</strong></address></figcaption></div>
				   </figure>
                   
				   
				   
			  	</table>
</marquee>	         
                
                
                	<h2 id="NOT"><strong ></strong></h2>
                 <marquee SCROLLAMOUNT=25>
<table align="center" width="10">
<tr>
<td>  
				   <figure id="imagen"><div align="center">
                       <center> <p> <img src="e.gif" width="300px" height="150px"border="0"></h></p> </center>
					  <figcaption><div align="center"><address ><strong>Flora</strong></address></figcaption></div>
				   </figure>
				   
			   	</table>
               
</marquee>	
                
                
                	<h2 id="NOT"><strong ></strong></h2>
                 <marquee SCROLLAMOUNT=25>
<table align="center" width="10">
<tr>
<td>  
				   <figure id="imagen"><div align="center">
                       <center> <p> <img src="55.gif" width="300px" height="150px"border="0"></h></p> </center>
					  <figcaption><div align="center"><address ><strong>Fauna</strong></address></figcaption></div>
				   </figure>
				   
			   	</table>
               
</marquee>	
 
			</article>  
		</section>
	<footer id="informacion"  align="center">Derechos reservados del autor @admin 
	<address>Direccion:S/N Telefono:0999864418</address></footer>
</body>
</html>