
<?php

$a=5;
$b=2;
$r=null;
function calculadora($a,$b){
$r=$r.'suma= '. 'a'. '+ '. 'b'.($a+$b);
echo '<br/>';
$r=$r. 'resta= '.($a-$b);
echo '<br/>';
$r=$r. 'producto= '.($a*$b);
echo '<br/>';
$r=$r. 'division= '.($a/$b);
};
calculadora($a,$b);
?>
