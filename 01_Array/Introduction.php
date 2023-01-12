<?php
function findPlayer(Array $players, string $expectedPlayer) {
   
    $found = FALSE;
    foreach($players as $key => $player) {
        if($player === $expectedPlayer) {
            $found = $key;
            break;
        }
    }
    return $found;
}

function placeAllPlayers(Array $expectedPlayers, Array &$players) {

    foreach($expectedPlayers as $expectedPlayer) {
        $foundPlayer = findPlayer($players, $expectedPlayer);

        if($foundPlayer !== FALSE) {
            array_slice($players, $foundPlayer, 1);
        }
    }
}

$players = ['Messi', 'Ronaldo','Ronaldinho','Neymar','Kylian Mbappé'];
$expectedPlayers = ['Neymar','Ronaldo','Messi'];
placeAllPlayers($expectedPlayers,$players);
echo implode(",", $players);
