<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .casilla{
            height: 50px;
        }
        .escalera{
            background-image: url('escalera1.png');
            background-size: cover;
        }
        .serpiente{
            background-image: url('snake.png');
            background-size: 85%;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    <?php
    $colores = ["#6fa8dc", "#c49cff", "#f9a2d7", "#ff0096", "#f4cccc", "#ffb1d7", "#fff2cc"];
    ?>
    <div class="container">
       <h1>Practica 7- Tablero Serpientes Y Escaleras</h1><hr>
        <form action="">
            <div class="row">
            <?php
               for($i=100; $i>0; $i--){
                if($i == 4 || $i == 9 || $i == 15 || $i == 19 || $i == 24 || $i == 29  ){
                    echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                }else if($i == 5 || $i == 10 || $i == 16 || $i == 20 || $i == 25 || $i == 30  ){
                        echo "<div class='col-1 card m-1 casilla serpiente' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                   
                }else{
                echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
               }
            }
        
            ?>
            </div>
        </form>
    </div>
</body>
</html>