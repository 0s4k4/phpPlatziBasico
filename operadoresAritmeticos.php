<?php

function suma($a,$b){

    $resultado = $a + $b;

    return $resultado;
}

function resta ($a,$b) {
    $resultado  = $a - $b;
    
    return $resultado;
}

// if(isset($_POST['numero1']) && $_POST['numero2']){
//     echo "hay numero";
//     $numero1 = $_POST['numero1'];
    

//     suma($numero1,$numero2);
    
// } else{
//     echo 'no hay numero';
// }

if (isset($_POST['numero1']) && $_POST['numero2']) {

    $numero1 = intval($_POST['numero1']);
    $numero2 = intval($_POST['numero2']);

    $resultado_suma = suma($numero1,$numero2);
    echo $resultado_suma;


    $resultado_resta = resta($numero1,$numero2);
    echo $resultado_resta;
    # code...
} else {
    echo 'favor de ingresar numeros';
}

?>


<form action="operadoresAritmeticos.php" method="post">
    <input type="number" name="numero1" id="numero1">
    <label for="numero1">Ingresa numero 1</label>

    <input type="number" name="numero2" id="numero2">
    <label for="numero2">Ingresa numero 2</label>

    <input type="submit" >
    
</form>


<form action="" method="post"></form>