<?php
$meses = array('enero','febrero','marzo','abril','mayo','junio','julio',
               'agosto','septiembre','octubre','noviembre','diciembre');
			   
for ($i = 0; $i <= 10; $i++) {			 
	echo $meses[$i];
	echo "<br>";
}
foreach($meses as $mes){
	echo $mes.'<br/>';	
}
?>