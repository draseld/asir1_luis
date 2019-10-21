<table>
<tr>
	<td>número</td>
	<td>semana</td>
	<td>fecha</td>
	<td>Dia semana</td>
</tr>



<?php
$r=[];
$dias=[
		'Mon'=>'Lunes',
		'Tue'=>'Martes',
		'Wed'=>'Miercoles',
		'Thu'=>'Jueves',
		'Fri'=>'Viernes',
		'Sat'=>'Sábado',
		'Sun'=>'Domingo',
	];
for($i=1;$i<289;$i++){
	$r[]=[
	'n'=>$i,
	's'=>round($i/7)+1,
	'fecha'=> date('Y-m-d',strtotime('2019-09-11')+($i-1)*24*60*60),
	'D'=>$dias[date('D',strtotime('2019-09-11')+($i-1)*24*60*60)],
	];
	
}
/*
echo '<pre>';
print_r($r);
echo '</pre>';
*/
foreach($r as $f){
	echo '<tr>';
	// día año
	echo '<td>';
	echo $f['n'];
	echo '</td>';	
	// día semana
	echo '<td>';
	echo $f['s'];
	echo '</td>';
	// fecha
	echo '<td>';
	echo $f['fecha'];
	echo '</td>';	
	// día de la semana
	echo '<td>';
	echo $f['D'];
	echo '</td>';	
	
	echo '</tr>';
}
?>

</table>
