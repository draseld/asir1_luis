
<?php
function lado($a, $b, $c) {
	$r='escaleno';
		if ($a==$b or $a==$c or $b==$c) {
		$r='isosceles';
		}
		if($b==$c and $a==$c){
			$r='equilatero';
	}
	return $r;
}

echo lado(6,7,7)."<br>"."isosceles"."<br>";
echo lado(7,7,7)."<br>"."equilatero"."<br>";
echo lado(7,6,7)."<br>"."isosceles"."<br>";
echo lado(6,7,8)."<br>"."escaleno"."<br>"

?>