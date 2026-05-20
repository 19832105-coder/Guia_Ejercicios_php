<?php
echo"<h3>Tabla de multiplicar<h3>";
echo"<center><h2>";
$numero = $_POST['tabla'];
echo "<h2Tabla de $numero</h2>";
for ($i = 1; $i <= 10; $i++ ) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
}
echo'<br><br>';
echo'</center></h2>';
?>
<body
style="background-color:lightgray">
<a href="Ejercicio19.html">Volver</a><br><br>
<a href="index.php">Volver al indice</a><br><br>
