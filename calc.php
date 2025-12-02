<?php

// Addition (bug introduit ici !)
function add(int $a, int $b): int {
    // BUG: multiplication au lieu d'une addition
    return $a * $b;
}

if ($argc === 3) {
    echo add((int)$argv[1], (int)$argv[2]) . PHP_EOL;
}
