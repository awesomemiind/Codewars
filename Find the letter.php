<?php
$array = ["O", "Q", "R", "S"];
$detectCaps = ctype_upper(implode($array));
$array = str_split(strtolower(implode($array)));
$firstindex= ord($array[0]);
$count = count($array) - 1;
$lastindex = ord($array[$count]);
$range = array();
$rangeResult = array();
for ($firstindex; $firstindex <= $lastindex; $firstindex++)
{
    array_push($range, $firstindex);
}
foreach ($array as $valor)
{
    array_push($rangeResult, ord($valor));
}
$result = chr(implode(array_diff($range, $rangeResult)));
if ($detectCaps == 1)
{
    $result = strtoupper($result);
} else {
    $result = strtolower($result);
}
echo $result;
?>