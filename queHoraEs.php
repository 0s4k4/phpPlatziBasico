<?php
//validacion de nuestro post
//PROGRAMA PARA CONVERTIR HORAS,MINUTOS A SEGUNDOS
//HORAS A SEGUNGOS EJEMPLO CADA HORA TIENE 3600 SEGUNDOS 
//PARA SACAR LOS SEGUNDOS DE UN MINUTO ES SEGUDOS = MINUTO X 60

function HorasAsegundos($hora){

    $horaAsegundos = 3600 * $hora;
    return $horaAsegundos;
}


if(isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['conversion'])){
    echo "valores obtenidos";

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $opcion = $_POST['conversion'];

    switch ($opcion) {
        case '1':
            # code... para horas a segundos
            echo "seleccionaste la opcion de horas a segundos";
            break;

        case '2':
            #code para horas a segundos
            break;
        
        default:
            # code...
            break;
    }

} else {
    //echo "valores no obtenidos favor de ingresarlos";
}



?>

<!-- form para leer nuestras horas -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Que Hora es</title>
</head>
<body>
    <form action="queHoraEs.php" method="post">
        <input type="number" name="numero1" id="numero1">
        <label for="numero1">Ingrese el numero 1 de la operacion</label>
        <br>
        <input type="numbre" name="numero2" id="numero2">
        <label for="numero2">Ingrese el numero 2 de la operacion</label>
        <br>
        <select name="conversion" id="conversion">
            <option value="0" selected>Selecciona al conversion</option>
            <option value="1">Horas a segundos</option>
            <option value="2">Minutos a segundos</option>
        </select>
        <br>
        <input type="submit" value="envio">
    </form>
</body>
</html>