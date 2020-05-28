<?php
$archivo="dato.txt";
if(file_exists($archivo)){
$contador =file_get_contents($archivo);
$visitarea1=@$_COOKIE['sitio con cookie'];
if(!$visitarea1)$contador++;
}else{
	touch($archivo);
	chmod($archivo, 0755);
	$contador=1;
}
setcookie("Cookie_obligados",1,time()+3600);
file_put_contents($archivo, $contador)
																								
?>
