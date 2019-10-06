function XO($string) {

$x = 0;
$o = 0;
$arr = [];
$resultado = false;
$x = preg_match_all('/x/i', $string, $arr);
$o = preg_match_all('/o/i', $string, $arr);
if ($x == $o)
{
    $resultado = 'true';
} else {
     $resultado = 'false';   
}

$resultado = $resultado === 'true' ? true : false;
return $resultado;
}