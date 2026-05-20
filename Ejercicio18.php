<?php
echo"<center>";
$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$subtotal = $cantidad * $precio;
echo"<h2>Factura</h2><h2>";
echo "<br><br>";
echo "cliente: " . $cliente;
echo "<br><br>";
echo "producto: " . $producto;
echo "<br><br>";
echo "cantidad: " . $cantidad;
echo "<br><br>";
echo "precio: " . $precio;
echo "<br><br>";
echo "precio unitario: $" . $precio;
echo "<br><br>";
echo "subtotal: $" . $subtotal;
echo "<br><br>";
echo "total a pagar: $" . $subtotal;
echo"<br><br>";
?>
<body
style="background-color:lightgray">
<a href="Ejercicio18.html">Volver</a><br><br>
<a href="index.php">Volver al indice</a><br><br>