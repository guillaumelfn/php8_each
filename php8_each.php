<?php

// function each that does what PHP used to do.

function each(&$array) {
    $key = key($array);
    if ($key !== null) {
        $value = current($array);
        next($array);
        return array(1 => $value, 'value' => $value, 0 => $key, 'key' => $key);
    } else {
        return false;
    }
}

// PHP example to see the output.

$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');

reset($fruit);
while (list($key, $val) = each($fruit)) {
    echo "$key => $val\n";
}


