function odd_or_even(array $a): string {
$soma = 0;
foreach ($a as $valor)
{
    $soma += $valor;
}
$resultado = $soma % 2;
$soma % 2 == 0 ? $resultado = "even" : $resultado = "odd";
return $resultado;
}