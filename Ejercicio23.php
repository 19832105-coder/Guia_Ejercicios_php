<?php
echo"<center><h3>";
$precio = (float)$_POST["precio"];
$iva = $precio * 0.13;
$total = $precio + $iva;
echo"Precio sin IVA: $" . $precio . "<br>";
echo"IVA (13%): $" . $iva . "<br>";
echo "Total con IVA: $" . $total . "<br>";
echo"</center></h3>";
echo "<br><br>";
?>
<body
style="background-color:lightgray">
<a href="Ejercicio23.html">Volver</a><br><br>
<a href="index.php">Volver al indice</a><br><br>