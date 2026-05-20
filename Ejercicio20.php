<?php
echo"<center><h2>";
$numero = (int)$_POST['numero'];
$suma = 0;
for ($i = 1; $i < $numero; $i++) {
    $suma = $suma + $i;
}
echo "La suma del 1 al " . $numero . " es: " . $suma;

echo"</center></h2>";
echo"<br><br>";
?>
<body
style="background-color:lightgray">
<a href="Ejercicio20.html">Volver</a><br><br>
<a href="index.php">Volver al indice</a><br><br>