function divisors($integer) {
$n = $integer;
$end = $n/2;
$arr = array();
$primo =  $n." is prime";
$resultado;
for ($i = 2;$i <= $end;$i++)
{
    $sobra = $n % $i;
    if ($sobra == 0) 
    {
        array_push($arr, $i);
    }
}

 count($arr) < 1 ? $resultado = $primo : $resultado = $arr;
return $resultado;
}