Luis gomez hijarrubia (Alumno)
<a href="http://192.168.0.113/asir1_victor/asir1.html">victor</a>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>
