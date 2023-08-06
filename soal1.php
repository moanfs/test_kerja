<?php
$bil = array(12, 9, 30, "A", "M", 99, 82, "J", "N", "B");

function bilangan($a, $b)
{
    if (is_string($a) && is_string($b)) {
        return strcmp($a, $b);
    }
    if (!is_string($a) && !is_string($b)) {
        return $a - $b;
    }

    return is_string($a) ? -1 : 1;
}
usort($bil, 'bilangan');
print_r($bil);
