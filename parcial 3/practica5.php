<?php
    
    $cuadros = $_POST["cuadro"];
     
    var_dump($cuadros);

    if($cuadro[1]  && $calificacion<=8){
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
12