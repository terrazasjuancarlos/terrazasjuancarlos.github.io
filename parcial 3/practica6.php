<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>juego del ahorcado</title>
</head>
<body>
    <?php
      $nombre = $_POST["jugador"]; 
      $palabra = $_POST["palabra"]; 
      $vidas = $_POST["vidas"];
    ?>
    <div class="container">
        <div class="row">
            <h1>juego del ahorcado</h1>
            <h3>nombre del jugador:     <?php echo $nombre; ?></h3>
            <h4>numero de vidas     <?php echo $vidas; ?></h4>
            <?php
                $letras = $str_slipt[" $palabra "]; /*  */
                for ($i=0; $i($letras) < ; $i++) { 
                   echo"<input type = 'text' name = 'frase[]'> wi";
                }
                
            ?>        
            <br>
            <input type="text" name="letra" style>
            <input type="text">
        </div>
    </div>
</body>
</html>