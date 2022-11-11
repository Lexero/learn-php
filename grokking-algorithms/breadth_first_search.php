<?php

function personIsSeller(string $name): bool
{
    return $name[-1] == "m";
}

function addToQueue(\SplQueue $queue, array $persons): void
{
    foreach ($persons as $person) {
        $queue->enqueue($person);
    }
}

function search(string $name, array $graph): string
{
    $queue = new \SplQueue();
    addToQueue($queue, $graph[$name]);
    $searched = [];
    while (!$queue->isEmpty()) {
        $person = $queue->dequeue();
        if (array_key_exists($person, $searched)) {
            continue;
        }

        if (personIsSeller($person)) {
            return "{$person} is a mango seller!";
        } else {
            addToQueue($queue, $graph[$person]);
            $searched[$person] = true;
        }
    }
    return "No mango seller";
}

$graph["you"] = ["alice", "bob", "claire"];
$graph["bob"] = ["anuj", "peggy"];
$graph["alice"] = ["peggy"];
$graph["claire"] = ["thom", "jonny"];
$graph["anuj"] = [];
$graph["peggy"] = [];
$graph["thom"] = [];
$graph["jonny"] = [];

echo search("you", $graph);