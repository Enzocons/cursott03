<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clase 3 PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/master.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Practicando bucles</h1>
    <?php
    $continuar = true;
    //dd($continuar);
    while ($continuar){
        for ($i = 0; $i <= 100; $i++){
            if ($i == 20){
                $continuar = false;
                break;         
            }
         echo "<h2>El valor de i es: $i</h2> </br>";
    }
    var_dump($continuar);
 }

 echo "</br>";
 ?>
 <ul>
     <?php
        $alumnos = ["Santi","Luna","Francisco","Romina"];
        foreach($alumnos as $key => $value){ ?>
        <li>
            <?php 
            echo "$value";
            ?>
            </li>
    <?php } ?>
    
 </ul>
    
</body>
</html>