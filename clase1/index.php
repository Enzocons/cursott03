<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP CLASE 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
   
<body>
   
   <?php

   echo "<h2>Ejercicio 1</h2>";
   $numentero=20;
   $numdecimal=22.2;
   $varcadena='hola'.'22';
   $varcadena2="hola"."21";
   
   echo "$numentero $numdecimal $varcadena $varcadena2";
   
   echo "<hr>";
   echo "<h2>Ejercicio 2</h2>";
   $uno="Tres";
   $dos="tristes";
   $tres="tigres";
   $cuatro="tragan";
   $cinco="trigo";
   $seis="en";
   $siete="un";
   $ocho="trigal";

   echo "$uno $dos $tres $cuatro $cinco $seis $siete $ocho";


   echo "<hr>";
   echo "<h2>Ejercicio 3</h2>";
   $variable01 = true;

 $variable02 = false;

 $variable03 = 0;

 $variable04 = 1;

 $variable05 = 6;

 $variable06 = '';

 $variable07 = "3";

 $variable08 = "true";

 $variable09 = 'false';

 $variable10 = null;

 function tipoDato($variable01)
 {
    if ( $variable01 == true )
    {
        echo 'el valor' . $variable01 . 'es verdadero.';
    }
    else
    {
        echo 'el valor' . $variable01 . 'es falso.';
    }
 }

 tipoDato($variable01);
 
 echo "<hr>";
 echo "<h2>Ejercicio 4</h2>";

 $animalesArray=["Perro","Gato","Tortuga","Cangrejo","Dragon"];
 var_dump($animalesArray);
 echo "Me gustan los siguientes animales $animalesArray[0], $animalesArray[1], $animalesArray[2], $animalesArray[3], $animalesArray[4]";
 $animalesArray[100]="Grifo";
 echo " Me gustan los siguientes animales $animalesArray[0], $animalesArray[1], $animalesArray[2], $animalesArray[3], $animalesArray[4], $animalesArray[100]";



   ?>
    
</body>
</html>