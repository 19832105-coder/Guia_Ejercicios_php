<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
if ($numero1 < $numero2) {
    echo"El numero menor es: " . $numero1;
    } else if ($numero1 > $numero2){
        echo"El numero menor es: " . $numero2;
    } else {
        echo"Los numeros son iguales";
    }
    echo'<br><br>';
?>
<body
style="background-color:lightgrey">
<a href="Ejercicio8.html">Regresar</a><br><br>
<a href="index.php">Volver al índice</a>