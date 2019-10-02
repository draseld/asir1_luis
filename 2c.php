
<?php



function calculadora($a,$b){
	$r=null;
	$r=$r. 'suma :'. ' '.$a.' '. '+ '. $b.' '. '='.' '.($a+$b) . '<br/>';

	$r=$r. 'resta :'. ' '.$a.' '. '- '. $b.' '. '='.' '.($a-$b) . '<br/>';

	$r=$r. 'multiplicacion :'. ' '.$a.' '. '* '. $b.' '. '='.' '.($a*$b) . '<br/>';

	$r=$r. 'division :'. ' '.$a.' '. '/ '. $b.' '. '='.' '.($a/$b) . '<br/>';
	return $r;
};
$concatenacion=calculadora(5,2);
echo $concatenacion;


?>
