<?php
echo"<center>";
echo "<h2>";
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
echo "nota1: " . $nota1 . "<br>";
echo "nota2: " . $nota2 . "<br>";
echo "nota3: " . $nota3 . "<br>";
$promedio = ($nota1 + $nota2 + $nota3) / 3;
echo" el promedio es: " . $promedio;
echo "<br><br>";
if ($promedio >=7){
    echo"El alumno aprobo";
} else {
    echo"El alumno reprobo";
    echo"<br><br>";
}
?>
<body
style="background-color:lightgrey">
<a href="Ejercicio11.html">Regresar</a><br><br>
<a href="index.php">Volver al índice</a>