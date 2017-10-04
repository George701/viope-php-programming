<?php
$i = 1;
while ($i <= 5 )
{
    if($i == 4)
        break;
    echo $i ;
    $i = $i + 1;
}

echo "</br>";

$values = array(1 => 'a', 2 => 'b', 3 => 'c');
while (list($key, $value) = each($values)) {
    echo "$key => $value \r\n";
    if ($key == 3) {
        $values[4] = 'd';
    }
    if ($key == 4) {
        $values[5] = 'e';
    }
}
?>