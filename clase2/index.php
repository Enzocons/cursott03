<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clase PHP-2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/master.css">
    <script src="main.js"></script>
</head>
<body>
  <?php
   $valor1=10;
   $valor2=20;
   $resultado=0;  
   if($valor1>$valor2){
       $resultado=$valor1+$valor2;
   }else{
       $resultado=$valor1*$valor2;
   }
   echo "El resultado es: $resultado";
   echo "<hr>";
   echo "<h2>Ejercicio 1</h2>";

   $num1=10;
   $num2=20;
   if($num1>$num2){
       echo "$num1 es mayor que $num2";
   }else{
           echo "$num2 es mayor que $num1";
       }
   

   echo "<hr>";
   echo "<h2> Ejercicio 2</h2>";
    $num_random=rand(1,5);
    If($num_random==3){
        echo $num_random;
    }else if ($num_random==5){
            echo $num_random;
        }
    

    echo"<hr>";
    echo"<h2> Ejercicio 3</h2>";
    if($num_random !=3){
        echo "No es el numero 3";
    }else { 
        echo $num_random;
    }
    
    echo "<hr>";
    echo"<h2>Ejercicio 4 </h2>";
    $numero_random=rand(1,100);
    if($numero_random>50){
        echo "El numero es mayor a 50";
    }else{ echo "El numero es menor a 50";
    }

    echo "<hr>";
    echo "<h2>Ejercicio 5 </h2>";
    $nombredeUsuario="";
    $ContraseniadeUsuario="";
    If($nombredeUsuario=="admin" && $ContraseniadeUsuario=="1234"){
        echo "Bienvenido!";
    }else if($nombredeUsuario!="admin" && $ContraseniadeUsuario=="1234" ){
        echo "el nombre de usuario no es correcto";
    }else if( $nombredeUsuario=="admin" && $ContraseniadeUsuario!="1234"){
        echo "la contraseña no es correcta";
    }else if ( $nombredeUsuario!="admin" &&  $ContraseniadeUsuario!="1234"){
        echo "uno de los campos no es correcto";
    }
    
    echo "<hr>";
    echo "<h2>Ejercicio 6 </h2>";
    $edad=20;
    $casado=true;
    $sexo="Femenino";
    If($edad>18 && $casado==true && $sexo=="Femenino"){
      echo "Bienvenido";
    }

    echo "<hr>";
    echo "<h2>Ejercicio 7 </h2>";
    $cantidadDeAlumnos=7;
    If($cantidadDeAlumnos){
      echo  "true";
    }else{
      echo "false";
    }

    echo "<hr>";
    echo "<h2>Switch </h2>";
    $dias= ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
    $diaFestivo= rand(0,6);
    switch ($diaFestivo){
        case 0:
        echo "$dias[0]"." Este dia es festivo";
        break;
        case 1:
          echo  "$dias[1]"." Este dia es festivo";
            break;
        case 2:
          echo  "$dias[2]"." Este dia es festivo";
            break;
        case 3:
         echo "$dias[3]"." Este dia es festivo";
           break;
        case 4:
           echo"$dias[4]"." Este dia es festivo";
            break; 
        case 5:
          echo  "$dias[5]"." Este dia es festivo";
            break;             
        case 6:
          echo  "$dias[6]"." Este dia es festivo";
            break;
        default:
            echo "Debe especificar un valor entre 0 y 6";
            break;

    }
   
    echo "<hr>";
    echo "<h2>Ejercicio con Dani</h2>";
    $dni="46848865";
    $Nombre= "Enzo";
    $Sueldo=10000;
    $Aumento = 0;
    $saldototal=0;
    If ($Sueldo<=12000){
        $Aumento=30;
        $saldototal=($Sueldo*$Aumento)/100 + $Sueldo;
        echo "<h3>Estimado portador DNI $dni su sueldo actual es $Sueldo
        su aumento fue $Aumento%, y su sueldo nuevo es $saldototal";

    }else {
        $Aumento=15;
        $saldototal=($Sueldo*$Aumento)/100 + $Sueldo;
        echo "<h3>Estimado portador DNI $dni su sueldo actual es $Sueldo
        su aumento fue $Aumento%, y su sueldo nuevo es $saldototal";
    }

   ?>
    
</body>
</html>