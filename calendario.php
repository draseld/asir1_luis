<?php

function mes($n){
	$m=[
	[
		'nombre' => 'enero',
		'dia' => '31',
		'estacion' => 'invierno'
	],
	[
		'nombre' => 'febrero',
		'dia' => '28',
		'estacion' => 'invierno'
	],
	[
		'nombre' => 'marzo',
		'dia' => '31',
		'estacion' => 'primavera'
	],
	[
		'nombre' => 'abril',
		'dia' => '30',
		'estacion' => 'primavera'
	],
	[
		'nombre' => 'mayo',
		'dia' => '31',
		'estacion' => 'primavera'
	],
	[
		'nombre' => 'junio',
		'dia' => '30',
		'estacion' => 'verano'
	],
	[
		'nombre' => 'julio',
		'dia' => '31',
		'estacion' => 'verano'
	],
	[
		'nombre' => 'agosto',
		'dia' => '31',
		'estacion' => 'verano'
	],
	[
		'nombre' => 'septiembre',
		'dia' => '30',
		'estacion' => 'otoño'
	],
	[
		'nombre' => 'octubre',
		'dia' => '31',
		'estacion' => 'otoño'
	],
	[
		'nombre' => 'noviembre',
		'dia' => '30',
		'estacion' => 'otoño'
	],
	[
		'nombre' => 'diciembre',
		'dia' => '31',
		'estacion' => 'invierno'
	]
	];
	return $m[$n-1];
}

echo mes(10)['nombre']."<br>";
echo mes(10)['dia']."<br>";
echo mes(10)['estacion']."<br>";
echo mes(7)['nombre']."<br>";
echo mes(7)['dia']."<br>";
echo mes(7)['estacion']."<br>";
echo mes(8)['nombre']."<br>";
echo mes(8)['dia']."<br>";
echo mes(8)['estacion']."<br>";
?>



