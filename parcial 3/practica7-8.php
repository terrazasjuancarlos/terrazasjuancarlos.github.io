<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>serpiente y escalers</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .casilla {
            border: 1px solid #000;
            text-align: center;
            padding: 17px 0;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: -1px;
        }
        .rojo { background-color: red; }
        .amarillo { background-color: rgb(254,242,0); }
        .verde { background-color: rgb(165,204,59); }
        .azul { background-color: rgb(1,173,239); }
        .casilla {
            flex-grow: 1;
            border: 1px solid #000;
            text-align: center;
            padding: 17px 0;
            font-size: 20px;
            font-weight: bold;
        }
        .escalera {
            background-image: url('escalera.png');
            background-size: cover;
        }
        .serpiente {
            background-image: url('serpiente.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
    .ficha{
        background-image: url('fichaR.png');
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>serpiente y escalers</h1>
        <form action="practica7-8.php" method="post">
            <input type="submit" value="jugador" class="btn btn-primary">
            <hr>
            <div class="row" style="margin-bottom: -1px;">
                
                <?php
                $colores = ["#C80606", "#FFA200", "#4BEF4E", "#4BEFED", "#3535FF"];

                if(isset($_POST["casilla"])){
                    $dado = rand(2,12);
                    echo "<h2> Resultado del Dado = ".$dado."</h2>";
                    $casilla = $dado + intval($_POST["casilla"]);
                    echo "<h3>El jugador estaba en la casilla".intval($_POST["casilla"])." y paso a la casilla".$casilla;
                    //valida si gano el jugador 1
                    if($casilla >= 100){
                        echo "<h1> El jugador 1 gano </h1>";
                        
                        $casilla = 100 ;
                    }
                    //valida la escalera en la casilla 5
                }
                else
                {
                    $casilla = -1;}
                    for($i=100; $i>-1; $i--){
                        if($i == 4 || $i == 9 || $i == 33 || $i == 28 || $i == 40 || $i == 80 ||$i == 71 ||$i == 77){
                            echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";

                        } else if($i == 17 || $i == 54 || $i == 58 || $i == 64 || $i == 87 || $i == 93 ||$i == 95 ||$i == 99 ||$i == 36){
                            echo "<div class='col-1 card m-1 casilla serpiente' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";

                        } else {
                            echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";

                        }
                    }
                
                ?>
            </div>
            <input type="hidden" name="casilla" value="<?php echo $casilla;?>">
        </form>    
    </div>
</body>
</html>

