<?php
$michiEsGrande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;


echo "es un michi que es grande y le gusta comer?";
echo '<br>';
var_dump($michiEsGrande && $le_gusta_comer);

echo '<br>';
echo 'es un michi que es grande o sabe volar?';
echo '<br>';
var_dump($michiEsGrande || $sabe_volar);
echo '<br>';
echo 'es un michi que sabe volar o tiene dos patas?';
echo '<br>';
var_dump($sabe_volar || $tiene_2_patas);
echo '<br>';
echo 'al michi no le gusta comer?';
echo '<br>';
var_dump(!$le_gusta_comer);
echo '<br>';
echo 'al michi no le gusta comer o no es un michi grande';
echo '<br>';
var_dump(! $le_gusta_comer || $michiEsGrande);
?>