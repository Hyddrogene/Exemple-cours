<?php

// Addition simple, sans bug.
function add(int $a, int $b): int {
    return $a + $b;
}

if ($argc === 3) {
    echo add((int)$argv[1], (int)$argv[2]) . PHP_EOL;
}
