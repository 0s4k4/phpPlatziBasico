<?php

echo 1-2-3; //se ejecuta desde el uno al 3
echo "<br>";   

echo 1- (2-3);  //se ejecuta el 2-3 y luego el -1

//$b = 5;
$c = 10;

echo '<br>';

$a = $b = $c; //se ejecuta primero b igual a c y luego a = b

echo $a; //nos da 10


$michis_4_patas = true;
$michis_programan_en_php = false;
$resultado = $michis_4_patas and $michis_programan_en_php; //al ejecutarse de esta manera lo que hace primero es declarar el valor de resultado, y este al ser la combinacion de dos bool uno de los bool es false y por eso da el error malo, por lo cual se debe hacer parentesis para que se haga correctamente
//hay que usar siempre parentesis para mejorar la leginilidad de nuestras operaciones con booleanos y precedencia
$resultado = ($michis_4_patas and $michis_programan_en_php);


var_dump($resultado);



?>