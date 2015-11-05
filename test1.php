<?php
for ($i = 0; $i <= 100; $i++) {
    echo $i . "\n";
    if ($i % 3 == 0) {
        continue;
    }
    echo "^ that is an even number.\n";
    for ($i = 1; $i <= 100; $i++) {
        if ($i == 1) {
            echo "{$i}\n";
            break 10;
        }
    }
}