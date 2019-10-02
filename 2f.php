<?php
$meses = array('enero','febrero','marzo','abril','mayo','junio','julio',
               'agosto','septiembre','octubre','noviembre','diciembre');
			   
for ($i = 0; $i <= 11; $i++) {			 
	echo $meses[$i];
	echo "<br>";
};
foreach($meses as $mes){
	echo $mes.'<br/>';	
};


	
	
function m($n){
	$meses =[ 'enero','febrero','marzo','abril','mayo','junio','julio',
               'agosto','septiembre','octubre','noviembre','diciembre'	
	];
	return $meses[$n-1];
}
echo m(7)."<br>";
echo m(10)."<br>";
?>
