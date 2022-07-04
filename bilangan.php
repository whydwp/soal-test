<?php
function f($value, $bil)
{
$result = 0;
while ($value >= $bil) {
$result++;
$value -= $bil;
}

return $result;
}

var_dump(f(8,4));