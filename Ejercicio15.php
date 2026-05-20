<?php
echo"<center><h2>";
$grados_celsius = (float)$_POST['temperatura'];
$grados_Fahrenheit = $grados_celsius * (9/5) + 32;
echo $grados_celsius . " equivale a " . $grados_Fahrenheit . " grados Fahrenheit ";
echo"</center></h2>";
echo"<br><br>";
?>
<body
style="background-color:lightgrey">
<a href="Ejercicio15.html">Volver</a><br><br>
<a href="index.php">Volver al indice</a>