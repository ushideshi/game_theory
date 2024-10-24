<?php

namespace GameTheory;



require 'bootstrap.php';

$game = new GameController();
$game->setRounds($rounds = config('rounds'));
$players = [];
$enemies = [];


foreach (glob('App/Players/*.php') as $file)
{

    $class = basename($file, '.php');
    $class = 'GameTheory\Players\\'.$class;
    array_push($players, new $class);

    //We do not want the player to be the enemy at the same time. so we set a new array with the same content of player.
    array_push($enemies, new $class);

}

for($player=0; $player<count($players);$player++){
//each match goes for the number of rounds
    $players[$player]->setID(1);
    for($enemy=0; $enemy<count($enemies);$enemy++){
        $enemies[$enemy]->setID(2);
        $game->playerRound($players[$player],$enemies[$enemy], $rounds);
    }
}


//sort the results from highest to lowest
usort($players, fn($a, $b) => $b->getScore() <=> $a->getScore());

include 'App/views/results.php';

