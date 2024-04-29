<?php

/*izveidot speli rock paper scissors*/

$items =
    [
        'rock' => 1,
        'paper' => 2,
        'scissors' => 3,
        'lizard' => 4,
        'spock' => 5,
    ];


$beats = [
    1 => [3, 4],
    2 => [1, 5],
    3 => [2, 4],
    4 => [2, 5],
    5 => [1, 3]

];


$playerSelection = 0;
$pcSelection = $items[array_rand($items)];

var_dump($pcSelection);

$guess = strtolower(readline("Enter rock, paper, scissors, lizard or spock: "));

if (!array_key_exists($guess, $items)) {
    echo 'Enter a valid word';
    exit;
}

$playerSelection = $items[$guess];

if ($playerSelection === $pcSelection) {
    echo 'Its a draw!' . PHP_EOL;
    exit;
};
if (in_array($pcSelection, $beats[$playerSelection])) {
    echo 'You win! :)' . PHP_EOL;
    exit;
};
if (in_array($playerSelection, $beats[$pcSelection])) {
    echo 'You lose! :(' . PHP_EOL;
    exit;
};










