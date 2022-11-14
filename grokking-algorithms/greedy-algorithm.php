<?php

$statesNeeded = ['mt', 'wa', 'or', 'id', 'nv', 'ut', 'ca', 'az'];

$stations = [];
$stations['kone'] = ['id', 'nv', 'ut'];
$stations['ktwo'] = ['wa', 'id', 'mt'];
$stations['kthree'] = ['or', 'nv', 'ca'];
$stations['kfour'] = ['nv', 'ut'];
$stations['kfive'] = ['ca', 'az'];

$finalStations = [];

while ($statesNeeded != []){
    $bestStation = null;
    $statesCovered = [];
    foreach ($stations as $station => $state) {
        $covered = array_intersect($statesNeeded, $state);
        if (count($covered) > count($statesCovered)) {
            $bestStation = [$station];
            $statesCovered = $covered;
        }
    }
    $statesNeeded = array_diff($statesNeeded, $statesCovered);
    $finalStations = array_merge($finalStations, $bestStation);
}

print_r($finalStations);