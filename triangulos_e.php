<?php

function lados($a, $b, $c) {
	$r='triangulo escaleno';
		if ($a==$b or $a==$c) {
		$r='triangulo isosceles';
		}
		if($b==$c and $a==$c){
			$r='triangulo equilatero';
	}
	return $r;
}
function angulos($a, $b, $c) {
	$s='  rectangulo';
		if ($a>90 or $b>90 or $c>90) {
			$s='  obtusangulo';
			}
		
		if($a<90 and $b<90 and $c<90){
			$s=' acutangulo';
	}
	return $s;
}

	
function triangulo($l) {
(
		$a=$1[0],
		$a=$1[1],
		$a=$1[2]
		
	
		);
}
echo tipo($a)."<br>";
?>




