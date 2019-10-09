  
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
echo lado(7,7,7)."<br>";
echo lado(1,5,7)."<br>";
echo lado(2,7,2)."<br>";
?>