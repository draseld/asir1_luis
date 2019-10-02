<?php
$primero = 1;
$ultimo = 10;
echo 'primero '.$primero.'<br/>';
echo 'ultimo '.$ultimo.'<br/>'.'<br/>';
for ($tabla=$primero; $tabla<=$ultimo; $tabla++){
	echo 'Tabla del '.$tabla.'<br/>';
	for ($i=1; $i<=10; $i++){
	echo $tabla.'*'.$i.'='.$tabla*$i.'<br/>';
	};
	echo '<br/>';
	echo '<br/>';	
};
?>