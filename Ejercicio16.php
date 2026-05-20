<?php
echo"<center><h2>";
$nombre = $_POST["nombre"];
$horas = (float)$_POST["horas"];
$pago = (float)$_POST["pago"];
$salario = $horas * $pago;
echo"El salario total de ". $nombre . "es " . $salario;
echo "<br><br>";
echo "</center></h2>";
?>
<body
style="background-color:lightgray">
<a href="Ejercicio16.html">Volver</a><br><br>
<a href="index.php">Volver al indice</a><br><br>