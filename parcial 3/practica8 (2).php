<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica8 - juego loteria</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .ficha{
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .check{
            opacity: 0.3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>La Loteria</h1><hr>
        <form action="practica8.php" method="post">
            <?php
            if(isset($_POST["cartilla1"])){
                $cartilla1 = $_POST["cartilla1"];
                $cartilla2 = $_POST["cartilla2"];
                //logica
                /*$carta = rand(1,54);
                $cartas_dadas = [];
                array_push($cartas_dadas, $carta);
*/

            }else{
                $cartilla1 = [];
                $total = 0; 
                while($total <= 16){
                    $numero =  rand(1,54);
                    if(array_search($numero, $cartilla1) == false){
                        $cartilla1[$total] = $numero;
                        $total ++;
                    }
                }
                $cartilla2 = [];
                $total = 0; 
                while($total <= 16){
                    $numero =  rand(1,54);
                    if(array_search($numero, $cartilla2) == false){
                        $cartilla2[$total] = $numero;
                        $total ++;
                    }
                }



            }

            ?>
            <input type="submit" value="dar cartilla" name="cartilla" class="btn btn-primary"><hr>
            <div class="row">
                <div class="col-6">
                    <div class="row m-1">
                        <?php
                            //pintar carta 1
                            for($i=0; $i<16; $i++){
                                if(array)
                                $numero = rand(1,54);
                                echo "<div class='col-3 p-0'><img src='fotos_loteria/".$cartilla1[$i].".jpeg' class='img-thumbnail'></div>";
                                echo "<input type='hidden' name='cartilla1[]' value='". $cartilla1[$i] ."'>";
                            }
                        ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row m-1">
                        <?php
                            //pintar carta 1
                            for($i=0; $i<16; $i++){
                                $numero = rand(1,54);
                                echo "<div class='col-3 p-0'><img src='fotos_loteria/".$cartilla2[$i].".jpeg' class='img-thumbnail'></div>";
                                echo "<input type='hidden' name='cartilla2[]' value='". $cartilla2[$i] ."'>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </form>        
    </div>
</body>
</html>