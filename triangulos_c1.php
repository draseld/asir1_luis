  
<?php
function lado($a, $b, $c) {
	$r='escaleno';
		if ($a==$b or $a==$c) {
			$r='isosceles';
			if($b==$c)
				$r='equilatero';
	}
	return $r;
}
function angulo($a, $b, $c) {
	$r='rectangulo';
		if ($a>90 or $b>90 or $c>90) {
			$r='obtusangulo';
			}
		
		if($a<90 and $b<90 and $c<90){
			$r='acutangulo';
	}
	return $r;
}
function c($a,$b,$c,$d,$e,$f){
	return lado($a,$b,$c).' y '.angulo($d,$e,$f);	
}
echo c(1,1,1,60,60,60);
echo '<br>';
echo c(1,1,1.42,90,45,45);
?>
