<?php

 
if(isset($_GET['nota'])){
	$nota = $_GET['nota'];
	$datos="Registro suscriptor:".$nota."\r\n";
	$r='PENDIENTE';
	if($nota>=5)
		$r='APROBADO';
	if($nota>=6)
		$r='BIEN';
	if($nota>=7)
		$r='NOTABLE';
	if ($nota>=9)
		$r='SOBRESALIENTE';
	if($nota>10)
		$r='NOTA NO VALIDA';
	echo 'Tu nota '.$nota.' descriptiva es : '.$r;
}
?>

<h1>DIME TU NOTA</h1>
<br>
<form>
<br> nota:
<input name="nota"><br>
<button>Enviar</button>
</form>



