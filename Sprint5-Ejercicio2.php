<html>

<head>
  <title>Ejercicio2</title>
</head>
<body>
	<h1>Sprint 5- Nivell 2</h1>
	<h2>Nivell 2 - Exercici 1</h2>
  <?php
  // Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.
  $fibo = array (0, 1, 1, 2, 3);
  echo "<b>Secuencia Fibonacci</b> = " . $fibo[0] . ", " . $fibo[1] . ", " . $fibo[2] . ", " 
  . $fibo[3] . ", " . $fibo[4] . "...";
  echo "<br>";

  $prim = array (7, 11, 13); 
  echo "<b>Números Primos Inicial</b> = ";
  foreach($prim as $numero)
  {
  echo $numero . ", ";
  }
  echo "<br>";

  echo "<h2>Nivell 2 - Exercici 2: Afegeix un valor més a l'array que conté 3 integers.</h2>";
  echo "<b>Número Primo Añadido</b> = ";    
  array_push($prim, 17);
  foreach($prim as $numero)
  {
  echo $numero . ", ";
  }
  echo "<br>";
  echo "<h2>Nivell 2 - Exercici 3: Mezcla els dos arrays i imprimir la mida resultant.</h2>";
// Mescla els dos arrays 
  echo "<b>Mezcla de las dos arrays</b> = "; 
  $result = array_merge($fibo, $prim);
  foreach ($result as $mezcla) 
  {
  echo $mezcla.', ';
  }
  echo "<br>";

// Imprimeix el tamany de l'array resultant per pantalla
  echo "<b>Tamaño del array Mezcla</b> = ";  
  echo count($result, COUNT_RECURSIVE); //particularmente útil para contar todos los elementos de un array multidimensional

  ?>
</body>


</html>