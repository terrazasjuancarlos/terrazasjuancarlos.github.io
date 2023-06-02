<?php

    echo"<h1>respues de el examen personalisado/<h1>";
    echo"<hr>";

    $nombre =$_POST["juan"];
    $calificasiones = 0;
    

    $pregunta=$_POST["pregunta1"];






    echo"<h2> =alumno:" .$nombre. " </h2>";







    
    echo"<br><br>";
    
    echo" <h2> pregunta 1, respuesta seleccionadad:  (" .$pregunta1.") </h3>";

    if($pregunta1 == "b"){
       $calificasiones ++;
       echo"<img src='d.png' width='10%'> <hr>";
    }else{
        $calificasiones --;

        echo"<img src='truco.png' width='10%'> <hr>";
    }
    echo"<br><br>";

    





?>