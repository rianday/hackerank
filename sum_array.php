<?php

$data = array(
    array(
        'person1' => 71,
        'person2' => 49,
        'person3' => 15,
    ),
    array(
        'person1' => 56,
        'person3' => 43,
        'person4' => 21,
        'person5' => 9,
        'person6' => 7,
    ),
);

array_walk(
    $data,
    function (&$value) {
        $sum = array_sum($value);
        array_walk(
            $value,
            function (&$value) use ($sum) {
                $value = round($value / $sum, 3) * 100 . '%';
            }
        );
    }
);
var_dump($data);

?>