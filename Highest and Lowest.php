function highAndLow($numbers)
{
$numbers = explode(';',str_replace(' ',';', $numbers));
sort($numbers);
$count = count($numbers);
$resultado = $numbers[$count - 1]." ".$numbers[0] ;
return $resultado;
}