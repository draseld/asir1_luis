
<?php



function calculadora($a,$b){
	$r=null;
	$r=$r. 'suma :'. ' '.$a.' '. '+ '. $b.' '. '='.' '.($a+$b) . '<br/>';

	$r=$r. 'resta :'. ' '.$a.' '. '- '. $b.' '. '='.' '.($a-$b) . '<br/>';

	$r=$r. 'multiplicacion :'. ' '.$a.' '. '* '. $b.' '. '='.' '.($a*$b) . '<br/>';

	$r=$r. 'division :'. ' '.$a.' '. '/ '. $b.' '. '='.' '.($a/$b) . '<br/>';
	return $r;
};
$s=calculadora(5,2);
echo $s;
echo calculadora(10,7);

?>
