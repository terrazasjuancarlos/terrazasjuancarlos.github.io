<?php

    $nombre =$_GET["nombre"];
    echo"nombre: ".$nombre;

    echo"<br><br>";


    $edad =$_GET["edad"];
    echo"edad: ".$edad;
 
    echo"<br><br>";
   
    
    $escuela =$_GET["escuela"];
    echo"escuela: ".$escuela;
  
    echo"<br><br>";
    
    $fecha_de_ingreso =$_GET["fecha_de_ingreso"];
    echo"fecha_de_ingreso: ".$fecha_de_ingreso;

    echo"<br><br>";
    
    $direccion =$_GET["direccion"];
    echo"direccion: ".$direccion;

    echo"<br><br>";

    if($edad>= 18){
        echo " es mayor de edad ";
    }else{
        echo " es menor de edad ";
    }
    echo"<br><br>";
    
    if($escuela == "CETIS 107"){
        echo " es mayor de edad ";
    }else{
        echo " es menor de edad ";
    }
    echo"<br><br>";
  

?>