<!DOCTYPE html>
<html>
<head>
	<title>Metodo de vigenere</title>
</head>
<body>

<?php
	include ('Cifrador.php');
	//include ('crifra.php');


	$texto_cifrado="";
	$msj="";
	$key="";
	
	if(isset($_POST['txtcifrado'])){
		//echo("ecuchando");
		$msj=$_POST['txtmensaje'];
		$key=$_POST['txtclave'];
		
		$texto_cifrado = Cifrador::cifrar($msj,$key);
		//$texto_cifrado = cifrar($msj,$key);

	}
?>

	<form name="form1" method="post">
		<label>Mensaje</label>
		<br>
		<input type="input" name="txtmensaje" value="<?php echo($msj)?>">
		<br>
		<label>Clave</label>
		<br>
		<input type="input" name="txtclave" value="<?php echo($key)?>">
		<br>
		<input type="submit" name="btncifrar" value="CIFRAR">
		<br>
		<label>Texto cifrado: </label>
		<br>
		<textarea name="txtcifrado"><?php echo($texto_cifrado)?></textarea>
		

	</form>
</body>
</html>