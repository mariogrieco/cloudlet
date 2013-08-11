<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Mi primera app web :D</title>
  <link rel="stylesheet" href="" />
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'/>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="estilos.css" />
  <link rel="stylesheet" href="responsive.css" />
</head>
 <body>
        </div> 
   <div class="upload"> 
   <div class="aa">
<form action=""> 
<p> 
<input type="submit" name="boton" value="Home" /> Wamp Server 5.1 <h9> Mario Grieco </h9>
</p>   
</form> 
<form action="subir.php"> 
   <input type="submit" name="boton" value="Subir archivo">
</form> 
<form action="#"> 
<input type="submit" name="boton" value="Crear Carpeta">
</form> 
<form action="raiz.php"> 
<input type="submit" name="boton" value="Ver Raiz">
</form>
<form action="hh.php">  
<input type="submit" name="boton" value="Ver Archivos">
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

	 
	
	                <?php
                    $directory="archivos";
                        $dirint = dir($directory);
                            while (($archivo = $dirint->read()) !== false)
                            {
                                if (@eregi("gif", $archivo) || @eregi("jpg", $archivo) || @eregi("png", $archivo)){
                                 
                                    echo '<img src="'.$directory."/".$archivo.'">'."\n";
                                }
                            }
                            $dirint->close();
                ?>
				

    </body>
</html>