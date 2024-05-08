<?php
$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan = false;


//and

var_dump($michis_felinos && $michis_4_patas);
echo '\n';


var_dump($michis_4_patas || $michis_vuelan);

echo '\n';


echo 'los michis no tienen 4 patas';
var_dump(! $michis_4_patas);



?>