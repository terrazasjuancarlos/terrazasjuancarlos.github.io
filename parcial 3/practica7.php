<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serpientes y Escaleras</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .casilla {
            flex-grow: 1;
            border: 1px solid #000;
            text-align: center;
            padding: 17px 0;
            font-size: 20px;
            font-weight: bold;
        }
        .rojo { background-color: red; }
        .amarillo { background-color: rgb(254,242,0); }
        .verde { background-color:   rgb(165,204,59); }
        .azul { background-color:  rgb(1,173,239); }
        .morado { background-color: rgb(131,78,160); }
        .naranja { background-color: orange ; }
        .snake{ background-imag : url ('snake.jpg'); }
    </style>
</head>
<body>
    <div class="container">
        <h1>Serpientes y Escaleras</h1>
            <form action="practica7.php" method="post">
                <input type="submit" value="jugar" class = "btn btn-success">
                    <div class="row">
                        <?php
                        $colors = ['rojo', 'amarillo', 'verde', 'azul', 'morado','naranja'];

                        for($i = 100; $i > 0; $i--) {
                            $randomColor = $colors[array_rand($colors)];
                            echo "<div class='col-1'><div class='casilla $randomColor'>$i</div></div>";

                            if($i==30) {
                                echo "<img src='escalera de mano.Png' style='width: 8%;'>";
                            }
                        }
                        ?>
                    </div>
            </form>        
    </div>
</body>
</html>
