<?php

function lado($a, $b, $c) {
	$r='escaleno';
		if ($a==$b or $a==$c or $b==$c) {
		$r='isosceles';
		}
		if($b==$c and $a==$c and $b==$c){
			$r='equilatero';
	}
	return $r;
}


function angulo($d, $e, $f) {
	$r='rectangulo';
		if ($d>90 or $e>90 or $f>90) {
			$r='obtusangulo';
			}
		
		if($d<90 and $e<90 and $f<90){
			$r='acutangulo';
	}
	return $r;
}
function c($a,$b,$c,$d,$e,$f){
	return lado($a,$b,$c).' y '.angulo($d,$e,$f);	
}
echo c(7,7,7,60,60,60)."<br>"."equilatero"."<br>";
echo '<br>';
echo c(1,5,7,30,90,60)."<br>"."escaleno"."<br>";
echo '<br>';
echo c(2,7,2.42,30,30,120)."<br>"."isosceles"."<br>";
?>