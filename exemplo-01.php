<?php
/**
 * Created by PhpStorm.
 * User: sergiojoffer
 * Date: 18/09/17
 * Time: 20:06
 */


//$nome = (int)$_GET["$a"];

//var_dump($nome);

$ip = $_SERVER["SERVER_ADDR"];

echo "O endereço IP do client é : " . $ip;