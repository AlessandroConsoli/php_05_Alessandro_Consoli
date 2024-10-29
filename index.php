<?php

$numbers = [1, 5, 6, 9, 12, 40, 3, 8, 12, 15];
$pairNumbers = [];

// print_r($numbers);

foreach ($numbers as $number) {
    if (($number % 2) == 0) {
        $pairNumbers[] = "$number";
    };
    print_r($pairNumbers);
};

$media = array_sum($pairNumbers) / count($pairNumbers);
echo("La media è" . " " . $media);