<?php
echo"<h2>";
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
if ($numero1 > $numero2) {
    echo 'El número mayor es: ' . $numero1;
} else if ($numero1 < $numero2) {
    echo 'El numero mayor es: ' . $numero2;
} else {
    echo 'Los numero son iguales';
}
?>

<body
style="background-color:lightgrey">
<a href="Ejercicio7.html">Regresar</a><br><br>
<a href="index.php">Volver al índice</a>