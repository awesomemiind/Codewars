<?php
$string = "camel case word";
$resultado = "";
$word = array();
$string = explode(' ',$string);
$temp = $string[0];
$temp = str_split($temp);
$temp[0] = strtoupper($temp[0]);
$temp = implode($temp);
echo $temp;
?>