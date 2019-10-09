  
<?php
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
echo angulo(30,90,60)."<br>";
echo angulo(60,60,60)."<br>";
echo angulo(30,30,120)."<br>";
?>