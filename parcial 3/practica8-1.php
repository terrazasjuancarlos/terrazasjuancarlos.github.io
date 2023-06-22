<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>Loteria</h1>
        <form action="practica8-1.php" method="POST">
            <hr>
            <input type="submit" value="Carta" name="carta" class="btn btn-primary">
            <hr>
            
            <div class="row">
                <div class="col-6">
                    <?php
                    //cargar carta 1
                    $carta;
                    for($i=1; $i<=16; $i++){
                        $numero = rand(1,54);
                        echo "<img  src='fotos_loteria/$numero.jpeg' class='img-fluid' width='25%'>";
                        
                    }
                    ?>
                </div>
                <div class="col-6">
                    <?php
                    //cargar carta 2
                    $carta;
                    for($i=1; $i<=16; $i++){
                        $numero = rand(1,54);
                        echo "<img  src='fotos_loteria/$numero.jpeg' class='img-fluid' width='25%'>";
                        
                    }
                    
                    ?>
                </div>
                <div class="col-6">

                </div>
            </div>
        </form>
    </div>
</body>
</html>