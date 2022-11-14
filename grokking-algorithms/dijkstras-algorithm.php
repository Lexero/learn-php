<?php

$graph = [];
$graph['start']['a'] = 6;
$graph['start']['b'] = 2;
$graph['a']['fin'] = 1;
$graph['b']['a'] = 3;
$graph['b']['fin'] = 5;
$graph['fin'] = [];

$costs = [];
$infinity = INF;
$costs['a'] = 6;
$costs['b'] = 2;
$costs['fin'] = $infinity;

$parents = [];
$parents['a'] = "start";
$parents['b'] = "start";
$parents['fin'] = null;

function findLowestCostsNode(array $costs, array $processed): array
{
    $lowestCost = INF;
    $lowestCostNode = null;
    foreach ($costs as $node => $cost) {
        if ($cost < $lowestCost && !array_key_exists($node, $processed)) {
            $lowestCost = $cost;
            $lowestCostNode = $node;
        }
    }

    return [$lowestCostNode, $processed];
}

function dijkstrasAlgorithm(array $graph, array $costs, array $parents): array
{
    $processed = [];
    [$node, $processed] = findLowestCostsNode($costs, $processed);

    while ($node != null) {
        $cost = $costs[$node];
        $neighbors = $graph[$node];

        foreach ($neighbors as $key => $neighbor) {
            $newCost[$key] = $cost + $neighbor;
            if ($costs[$key] > $newCost[$key]) {
                $costs[$key] = $newCost[$key];
                $parents[$key] = $node;
            }
        }
        $processed[$node] = true;
        [$node, $processed] = findLowestCostsNode($costs, $processed);
    }

    return $costs;
}

print_r(dijkstrasAlgorithm($graph, $costs, $parents));