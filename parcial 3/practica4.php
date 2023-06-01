<?php

    echo"<h1>respues de el examen personalisado/<h1>";
    echo"<hr>";

    $nombre =$_POST["juan"];
    $calificasiones = 0;
    

    $pregunta=$_POST["pregunta1"];

    echo"<br><br>";
    
    echo" <h2> pregunta 1, respuesta seleccionadad:  (" .$pregunta1.") </h3>";

    if($pregunta1 == "b"){
       $calificasiones ++;
        echo "<img src="dulces.png">";
    }else{
        $calificasiones --;

        echo $nombre . " es menor que ";
    }
    echo"<br><br>";

    for($i=0; $i<=10; $i++ ){
        echo $i . "<br>";
    } 






?>