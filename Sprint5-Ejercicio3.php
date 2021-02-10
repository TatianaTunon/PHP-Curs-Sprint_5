<html>

<head>
  <title>Ejercicio 3</title>
</head>
<body>
	<h1>Sprint 5- Nivell 3</h1>
	<h2>Nivell 3 - Exercici 1</h2>
  <?php
  $fibo = array (0, 1, 1, 2, 3);
  echo "<b>Fibonacci</b> = ";
  foreach($fibo as $dato)
  {
  echo $dato . ", ";
  }
  echo "<br>";

  $prim = array (7, 11, 13, 17); 
  echo "<b>Primos</b> = ";
  foreach($prim as $numero)
  {
  echo $numero . ", ";
  }
  echo "<br>";

// Mescla els dos arrays
  $result = array_merge($fibo, $prim);

  echo "<b>Recorregut Array Mezcla: </b>"; //No tengo muy claro que sea esto
  foreach ($result as $val) {
    print $val . " - ";
  }
?>

	<h2>Nivell 3 - Exercici 2</h2>
<?php

//  Declarar dues variables int (x, y)
$x = 10;
$y = 8;

// Suma, Resta, Producte, Divisió y Mòdul con variables int
function operacions ($val_1, $val_2)
{
echo "Val1 = " . $val_1 , "<br>", "Val2 = " . $val_2, "<br />";
echo "<b>SUMA =</b> ", $val_1+$val_2,"<br />";
echo "<b>RESTA =</b> ", $val_1-$val_2,"<br />";
echo "<b>PRODUCTO =</b> ", $val_1*$val_2,"<br />";
echo "<b>DIVISIÓN =</b> ", $val_1/$val_2,"<br />";
echo "<b>MODUL =</b> ", $val_1%$val_2,"<br />"; // Resto de $val_1 dividido por $val_2
}
operacions ($x,$y);
echo "<br>";

// Declarar dues variables double (n, m)
$n = 7.9;
$m = 3.2;

// Suma, Resta, Producte, Divisió y Mòdul con variables double
operacions ($n,$m);
echo "<br>";

// Todas las variables: Doble, Suma y Producto
function doble ($num)
{
  return $num * 2;
}
echo "<b>Doble X:</b> " .doble ($x), "<br />" ."<b>Doble Y:</b> ".doble($y), "<br />"."<b>Doble N:</b> ".doble($n), "<br />"."<b>Doble M:</b> ".doble($m), "<br />";

$valors = array($x, $y, $n, $m);
echo "<br>";
echo "<b>Suma de todos las variables =</b> ", array_sum($valors),"<br />";
echo "<br>";
echo "<b>Multiplicación de todas las variables=</b> ", array_product($valors),"<br />";

  ?>
</body>


</html>