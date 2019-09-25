<?php
 
if(isset($_POST['submit']))
 
{
 
$name = $_POST['name'];
$email = $_POST['email'];
 
echo "Registo completado : <b> $name </b><br><br>";
echo "Registo completado : <b> $email </b><br><br>";
 
  $archivo="suscriptores.txt";
  $proceso=fopen($archivo,"a") or die("basura");
  $datos="Registro suscriptor:".$name."\r\n";
  $datos="Registro suscriptor:".$email."\r\n";
  fwrite($proceso,$datos);
  fclose($proceso);
 
}
 
?>

<h1>Formulario Suscriptores</h1>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <br> Nombre:
<input type="text" name="name"><br><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <br> Email: 
<input type="text" name="email"><br><br>
<input type="submit" name="submit" value="Submit Form"><br>
</form>