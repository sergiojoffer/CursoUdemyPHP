<?php
/**
 * Created by PhpStorm.
 * User: sergiojoffer
 * Date: 21/09/17
 * Time: 14:18
 */

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);

$empresa = str_replace("H", "3", $empresa);

echo $empresa;