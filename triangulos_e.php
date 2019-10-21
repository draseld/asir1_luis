<?php
function l($a, $b, $c) {
	$r='triangulo escaleno';
		if ($a==$b or $a==$c) {
		$r='triangulo isosceles';
		}
		if($b==$c and $a==$c){
			$r='triangulo equilatero';
	}
	return $r;
}
function a($A, $B, $C) {
	$s='  rectangulo';
		if ($A>90 or $B>90 or $C>90) {
			$s='  obtusangulo';
			}
		
		if($A<90 and $B<90 and $C<90){
			$s='  acutangulo';
	}
	return $s;
}
function t($l) {
	$a=$l[0];
	$b=$l[1];
	$c=$l[2];
	
	$x=($a**2-$b**2+$c**2)/(2*$c);
	$h=sqrt($a**2-$x**2);
	$A=atan($h/($c-$x))*(360/(2*3.14));
	$B=atan($h/$x)*(360/(2*3.14));
	$C=180-($A+$B);
	
return [
	'angulos'=>[$A,$B,$C],
	'tipo_lados'=>l($a,$b,$c),
	'tipo_angulos'=>a($A,$B,$C)
	];
}
echo '<pre>';
print_R( t([15,15,24]))."<br>";
echo '</pre>';
?>
