<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>practica 3 php - integrado  con html </title>
</head>
<body>
    <h1>usando php dentro de un  html</h1>

    <?php

    echo"<h1>hola pepas/<h1>";
    echo"<hr>";

    $alumno ="juan";
    $edad = 17;
    $escuela ="CETIS107";
    $especialidad ="programacion";

    echo"<br><br>";

    ?>

    <form action="">
        <label for="">nombre del alumno</label>
        <input type="text" valuae=<?php echo $alumno; ?>>

        <label for="">edad</label>
        <input type="number" valuae=<?php echo $edad; ?>>

       
        <input type="submit" valuae=<?php echo "incribirse a =" . $especialidad; ?>>
        
    </form>
    <br><br>

    <h2>calificaciones</h2>



</body>
</html>