<?php
/**
 * Created by PhpStorm.
 * User: sergiojoffer
 * Date: 21/09/17
 * Time: 14:23
 */

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br />";

var_dump($texto2);