<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
    function mensaje($mensaje){
        echo "<h2>$mensaje</h2> </br>";
     }
     mensaje("Hola mis alumnos");
     mensaje("Hola Mundo!");

     function dd($valor){
     var_dump($valor);
     exit;
     }
    echo "<hr>";
    $valor1 = 10;
    function sumar($valor2){
       global $valor1;
       return $valor1 + $valor2;
    }
    $resultado= sumar(20);
    echo "<h2>La sumatoria es de $resultado</h2>";
    echo "<h2>$valor1</h2>";

    echo "<hr>";
    function contar(){
     static $a = 0;
     echo '<h2>'.++$a.'</h2>'.'<br>';
    }
    contar();
    contar();
    contar();
    
    


   ?>

    
</body>
</html>