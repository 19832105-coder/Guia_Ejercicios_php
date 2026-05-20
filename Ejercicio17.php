<?php
echo"<center><h2>";
$monto =(float) $_POST['dinero'];
if ($monto >=100){
    $descuento = $monto * 0.10;
    $total = $monto - $descuento;
    echo"El descuento aplicado es $" . $descuento;
    echo"<br>"; 
    echo"EL total a pagar es: $" . $total;
} else {
    echo"No aplica dscuento: total a pagar: $ " . $monto;
    echo "<br>";
}
echo"</center></h2>";
?>
<body
style="background-color: aliceblue;">
<a href="Ejercicio17.html">Volver</a><br>
<a href="index.php">volver al indice</a><br>
