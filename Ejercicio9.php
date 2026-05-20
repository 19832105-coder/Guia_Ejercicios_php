<?php
echo"<center>";
echo"<h2>";
$numero1 = $_POST['numero1'];
if ($numero1 % 2 == 0){
    echo'EL numero:' . $numero1 . ' es par ' ;
} else {
    echo'El numero:' . $numero1 . ' es impar ' ;
}
echo'<br><br>';
echo '</h2>';
echo '</center>';
?>
<body
style="background-color:lightgrey">
<a href="Ejercicio9.html">Regresar</a><br><br>
<a href="index.php">Volver al índice</a>