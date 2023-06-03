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
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "<img src='truco.png' width='3%'><br><br><br>";       
        }
          if($pregunta2=="a"){
            $calificacion++; 
            echo "<img src='d.png' width='3%'><br><br><br>";       
        }else{
            echo "<img src='truco.png' width='3%'><br><br><br>";       
        }
        if($pregunta3=="b"){
            $calificacion++;   
            echo "<img src='d.png' width='3%'><br><br><br>";     
        }else{
            echo "<img src='truco.png' width='3%'><br><br><br>";       
        }
        if($pregunta4=="a"){
            $calificacion++;        
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "<img src='truco.png' width='3%'><br><br><br>";       
        }
        if($pregunta5=="c"){
            $calificacion++;
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "<img src='truco.png' width='3%'><br><br><br>";       
        }
        if($pregunta6=="b"){
            $calificacion++;
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "<img src='truco.png' width='3%'><br><br><br>";       
        }
        if($pregunta7=="a"){
            echo "<img src='d.png' width='3%'><br><br><br>";
            $calificacion++;
        }else{
            echo "<img src='truco.png' width='3%'><br><br><br>";       
        }
        if($pregunta8=="c"){
            $calificacion++;
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "<img src='truco.png' width='3%'><br><br><br>";       
        }
        if($pregunta9=="a"){
            $calificacion++;
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "<img src='truco.png' width='3%'><br><br><br>";       
        }
        if($pregunta10=="a"){
            $calificacion++;
            echo "<img src='d.png' width='3%'><br><br><br>";
        }else{
            echo "<img src='truco.png' width='3%'><br><br><br>";       
        }
        if($calificacion>5 && $calificacion<=8){
            echo "Felicidades!!! Pasaste con " .$calificacion;
            echo "<img src='' width='3%'>";

        }elseif($calificacion<5){
            echo ".... Sacaste " . $calificacion;
            echo "<img src='' width='3%'><br><br>";
        }elseif($calificacion>8){
            echo "vienvenido a los datos inutiles!!! Terminaste con calificacion de ". $calificacion;
            echo "<img src='' width='3%'><br><br>";
        }
    ?>