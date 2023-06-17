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
        .verde { background-color:   rgb(165,204,59); }
        .azul { background-color:  rgb(1,173,239); }
        .morado { background-color: rgb(131,78,160); }
    </style>
</head>
<body>
    <div class="container">
        <h1>Serpientes y Escaleras</h1>
        <form action="practica7.php" method="post">
            <hr>    
            <input type="submit" value="jugar" class="btn btn-success">
            <hr>
            <div class="row">
                <?php
                $colors = ['rojo', 'verde', 'azul', 'morado'];
                if (isset($_POST['dado'])) {
                    $jugador+= rand(1,6);
                    $jugador= max(0,min(100. $jugador));
                }
                for($i = 100; $i > 0; $i--) {
                    $randomColor = $colors[array_rand($colors)];
                    echo "<div class='col-1'><div class='casilla $randomColor'>$i";

                    if ($i == 30 || $i == 10 || $i == 50 || $i == 45 || $i == 65 || $i == 80) {
                        echo "<img src='escalera1.Png' style='width: 138%;'>";
                    }
                   
                    if ($i == 74 || $i == 99 || $i == 54 || $i == 23 || $i == 78 || $i == 68) {
                        echo "<img src='snake1.Png' style='width: 48%;'>";
                    }

                    if ( $i == 87 ||$i == 66) {
                        echo "<img src='snake2.Png' style='width: 48%;'>";
                        
                    }
                    
                    if ($i == 62 || $i == 75 || $i == 42 || $i == 11 || $i == 56  ) {
                        echo "<img src='snake3.Png' style='width: 48%;'>";
                        
                    }
                    if ($i == 42 || $i == 22 || $i == 62 || $i == 57 || $i == 77 || $i == 92) {
                        echo "<img src='escalera2.Png' style='width: 138%;'>";
                    }
                    
                    
                    
                   echo "</div></div>"; 
        
                }
                ?>
            </div>
        </form>        
    </div>
</body>
</html>
