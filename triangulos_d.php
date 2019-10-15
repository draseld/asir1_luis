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
$a=[
	'lados' => [3,7,1],
	'angulos' => [30,70,90],
	];
	
function tipo($a) {
	return lados(
		$a['lados'][0],
		$a['lados'][1],
		$a['lados'][2]
		).
	 angulos(
		$a['angulos'][0],
		$a['angulos'][1],
		$a['angulos'][2]
		);
}
echo tipo($a)."<br>";
?>




