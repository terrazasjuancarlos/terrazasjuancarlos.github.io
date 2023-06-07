<?php
    $nombre = $_POST["nombre"];
    $calificacion = 0;

    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunta10"];

    if($pregunta1=="b"){
            $calificacion++;
            echo "Pregunta 1: ";
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "Pregunta 1: ";
            echo "<img src='truco.jpg' width='3%'><br><br><br>";       
        }
          if($pregunta2=="c"){
            $calificacion++; 
              echo "Pregunta 2: ";
            echo "<img src='d.png' width='3%'><br><br><br>";       
        }else{
            echo "Pregunta 2: ";
            echo "<img src='truco.jpg' width='3%'><br><br><br>";       
        }
        if($pregunta3=="b"){
            $calificacion++;   
              echo "Pregunta 3: ";
            echo "<img src='d.png' width='3%'><br><br><br>";     
        }else{
            echo "Pregunta 3: ";
            echo "<img src='truco.jpg' width='3%'><br><br><br>";       
        }
        if($pregunta4=="c"){
            $calificacion++;        
              echo "Pregunta 4: ";
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "Pregunta 4: ";
            echo "<img src='truco.jpg' width='3%'><br><br><br>";       
        }
        if($pregunta5=="a"){
            $calificacion++;
              echo "Pregunta 5: ";
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "Pregunta 5: ";
            echo "<img src='truco.jpg' width='3%'><br><br><br>";       
        }
        if($pregunta6=="c"){
            $calificacion++;
              echo "Pregunta 6: ";
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "Pregunta 6: ";
            echo "<img src='truco.jpg' width='3%'><br><br><br>";       
        }
        if($pregunta7=="c"){
            $calificacion++;
              echo "Pregunta 7: ";
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "Pregunta 7: ";
            echo "<img src='truco.jpg' width='3%'><br><br><br>";       
        }
        if($pregunta8=="c"){
            $calificacion++;
              echo "Pregunta 8: ";
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "Pregunta 8: ";
            echo "<img src='truco.jpg' width='3%'><br><br><br>";       
        }
        if($pregunta9=="b"){
            $calificacion++;
              echo "Pregunta 9: ";
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "Pregunta 9: ";
            echo "<img src='truco.jpg' width='3%'><br><br><br>";       
        }
        if($pregunta10=="c"){
            $calificacion++;
              echo "Pregunta 10: ";
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "Pregunta 10: ";
            echo "<img src='truco.jpg' width='3%'><br><br><br>";       
        }
        if($calificacion>5 && $calificacion<=8){
            echo "Felicidades!!! Pasaste con " .$calificacion;
            echo "<img src='' width='3%'>";

        }elseif($calificacion<5){
            echo ".... Sacaste " . $calificacion;
        }elseif($calificacion>8){
            echo "vienvenido a los datos inutiles!!! Terminaste con calificacion de ". $calificacion;
            echo "<img src='' width='3%'><br><br>";
        }
    ?>