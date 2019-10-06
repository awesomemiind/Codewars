function camel_case(string $str): string {
$arr = explode(" ", $str);
$count = count($arr);
$resultado = "";
for ($i = 0; $i < $count ; $i ++)
{
    $word = str_split($arr[$i]);
    $word[0] = strtoupper($word[0]);
    $word = implode($word);
    $resultado .= $word;
}
return $resultado;
}