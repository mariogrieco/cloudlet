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
   <div class="upload"> 
   <form action="index.php"> 
   	<p> 
<input type="submit" name="boton" value="Atras" /> Probado en wamp
    </p>
 </form> 
<form enctype="multipart/form-data" action="" method="post"> 
    Sube un archivo: 
    <input type="file" name="archivo"/>
    <input id="subir" type="submit" value="Subir archivo" name="boton" /> 

</form> 
</div>
<p style="color: Green; text-align: center; margin: -71px;">
<?php 
ini_set('post_max_size','9000M');
ini_set('upload_max_filesize','9000M');
ini_set('max_execution_time','90000');
ini_set('max_input_time','90000');
$archi=1;
$numero = 'archivos';
 $formatos = array('.jpg', '.png', '.doc', '.pdf', '.zip', '.rar', '.exe', '.gif', '.JPG');
 $p = false;
 if (isset($_POST['boton'])){
 
	 $nombreArchivo = $_FILES['archivo']['name'];
	 $nombreTmpArchivo = $_FILES['archivo']['name'];
	 $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
	 
	 if(in_array($ext, $formatos)){
	 
	
	      if($p == false){
		  
		    move_uploaded_file($_FILES['archivo']['tmp_name'],
            "archivos/" . $_FILES['archivo']['name']);
		  
		  
		 echo "Subido Exitosamente : ";
		  echo "$nombreArchivo" ;
		  
		 
		  
		  }
		  else{
		     
		     echo '<p style="color: Red; text-align: center; margin: -71px;"> "Error #1, </p> ';
              echo "$nombreArchivo" ;
		  }
	 }
	 
	 
	 
	 
	 else {
	 echo '<p style="color: Red; text-align: center; margin: -71px;"> Archivo no permitido !. </p> ';
	 }
	  }
?> 
</p>
</div>
<div class="uplo"> 
   <h4> Archivos en el disco : </h4>
<?php
   if ($dir = opendir($numero)){
	
	 while($numero = readdir($dir)){
	  if ($numero != '.' && $numero != '..'){
	 echo "$archi : $numero<br />";
	 $archi++;
	 }
	 }
	 }
    if ($archi < 1){
	echo "NO HAY ARCHIVOS EN DISCO";
	}
    else{
	$archi--;
	echo "<br /><strong>$archi, archivos en el disco</strong>";
	}

	?>
</div>
   </body>
</html>
