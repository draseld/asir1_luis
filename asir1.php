Luis gomez hijarrubia (Alumno)
<a href="http://192.168.0.42/asir1_victorzayas/">victor</a>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fwrite ($f, date('H:i/d/m/y')."\r\n");
fclose($f)
?>
