<?php
echo"<center><h3>";
$dolares = (float)$_POST["dolares"];
$euros = $dolares * 0.86;
echo "$" . $dolares . " Equivale a: " . $euros . " euros";
echo "</center></h3>";
echo "<br><br>";
?>
<body
style="background-color:lightgray">
<a href="Ejercicio22.html">Volver</a><br><br>
<a href="index.php">Volver al indice</a><br><br>