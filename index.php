<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Mi primera app web :D</title>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'/>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="res/css/estilos.css" />
  <link rel="stylesheet" href="res/css/responsive.css" />
</head>
 <body>
 		</div> 
   <div class="upload"> 
   <div class="aa">
<form action=""> 
<p> 
<input class="red" type="submit" name="boton" value="Home" /> Probado en Wamp ,<h9> Echo </h9>
</p>   
</form> 
<form action="subir.php"> 
   <input class="red" type="submit" name="boton" value="Subir archivo">
</form> 
<!-- <form action="#"> 
<input type="submit" name="boton" value="Crear Carpeta">
</form>  -->
<!-- <form action="raiz.php"> 
<input type="submit" name="boton" value="Ver Raiz">
</form> -->
<form action="hh.php"> 	
<input class="red" type="submit" name="boton" value="Ver Archivos">
</form>
</div> 
	<div id="uploads"> 
   <h4> Archivos en el disco : </h4>
   <?php 
   $archi = 0;
  $numero = 'archivos';
   
      if ($dir = opendir($numero)){
	
	 while($numero = readdir($dir)){
	  if ($numero != '.' && $numero != '..'){
	 $archi++;
	 }
	 }
	 }
   
    if ($archi < 1){
	echo "NO HAY ARCHIVOS EN DISCO";
	}
    else{
	echo "$archi, archivos en el disco";
	}
?>
</div>
 </body>

</html>
