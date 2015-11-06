<?php
$a = 5;
$b = 4;
function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}
	echo add($a, $b) . PHP_EOL;