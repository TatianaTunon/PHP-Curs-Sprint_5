<html>
<head>
  <title>Ejercicio1</title>
</head>

<body>
  <?php
  echo "<h2>Nivell 1 - Exercici 1</h2>";	
  $dia= 10; //Variable de tipo intege (número entero)
  echo "Variable entera: ";
  echo $dia;
  echo "<br>";

  $ejercicio = 1.1; //Variable de tipo double o float (número decimal)
  echo "Variable double: ";
  echo $ejercicio;
  echo "<br>";

  $exite= true; //Variable boolea (true o false)
  echo "Variable boolean: ";
  echo $exite;
  echo "<br>";

  $nombre= "Tatiana"; //Variable de tipo string (serie de caracteres)
  echo "Variable string 1: ";
  echo $nombre;
  echo "<br>";

  echo "<h2>Nivell 1 - Exercici 2</h2>";
  $apellido= "Tunon"; //Variable de tipo string (serie de caracteres)
  echo "Variable string 2: ";
  echo $apellido;
  echo "<br>";

  echo "Cadena nombre y apellido: ";
  $cadena=$nombre. " " .$apellido;
  echo $cadena."<br>";

  echo "Longitud nombre+apellido: ";
  echo strlen($nombre)+strlen ($apellido); //ojo! que los acentos y la virgulilla de la ñ cuentan como caracter
  echo "<br>";

  echo "Cadena en ordre invers: ";	
  echo strrev ($nombre . " " . $apellido); //ojo! que los acentos y la virgulilla de la ñ no salen en formato correcto
  echo "<br>";
  
  echo "<h2>Nivell 1 - Exercici 3</h2>";
  define ("constante" , "Constante que incluye mi nombre: Tatiana");
      echo constante;
  
  ?>
</body>

</html>