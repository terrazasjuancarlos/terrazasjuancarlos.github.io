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
        echo " es MAYOR de edad ";
    }else{
        echo " es MENOR de edad ";
    }
    echo"<br><br>";
    
    if($escuela == "CETIS 107"){
        echo " <div style =' background-color:blue;'> CETIS 107 </div> ";
    }else if ($escuela == "CETIS 546"){
        echo " <div style =' background-color:red;'> CETIS 546 </div> ";
    }else if ($escuela == "COBAES"){
        echo " <div style =' background-color:green;'> COBAES </div> ";
    }
    echo"<br><br>";
  

?>