<?php

/**
 * Additionne deux entiers.
 *
 * @param int $a
 * @param int $b
 *
 * @return int Somme de $a et $b.
 */
function add(int $a, int $b): int
{
    return $a + $b;
}

// Petit mode CLI : php calc.php 2 3
if ($argc === 3) {
    echo add((int)$argv[1], (int)$argv[2]) . PHP_EOL;
}
